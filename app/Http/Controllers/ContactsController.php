<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use App\Contacts;
use App\User;
use DB;
use Auth;

class ContactsController extends Controller
{

        public function index()
        {
            $contacts = Contacts::all();
            return view('pages.contacts',compact( 'contacts' ));
        }

        public function create(Request $request)
        {
            $validator = Validator::make($request->all(),[
                'firstname' => 'required|string|max:255|regex:/^[(a-zA-Z\s)]+$/u',
                'lastname' => 'required|string|max:255|regex:/^[(a-zA-Z\s)]+$/u',
                'middlename' => 'nullable|string|max:255|regex:/^[(a-zA-Z\s)]+$/u',
                'phonenumber' => 'required|string|min:11|unique:contacts',
                'email' => 'required|email|string|max:255|unique:contacts',
            ]);

            if ($validator->passes()) 
            {
                $contact = new Contacts();
                $contact->phonenumber = $request->phonenumber;
                $contact->firstname = $request->firstname;
                $contact->lastname = $request->lastname;
                $contact->middlename = $request->middlename;
                $contact->email = $request->email;
                $contact->save();

                return redirect('/contacts')->with("message","Contact not found.");
    
            }
            else
            {
                return redirect('/contacts')->with("message","Something wrong with the Inputs.");
            }

        }


        public function view(Request $request, $id)
        {
            $contact = Contacts::where( 'id' , request()->id )->first();
            if($contact){
                return response()->success($contact);
            }else{
                return redirect('/contacts')->with("message","Contact not found.");
            }
            
        }

        public function update(Request $request, $id)
        {
            $validator = Validator::make($request->all(),[
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'middlename' => 'nullable|string|max:255',
                'phonenumber' => 'required|string|min:11|unique:contacts,phonenumber,' . $id,
                'email' => 'required|email|string|max:255|unique:users,email,' . $id,

            ]);

            if ($validator->passes()) 
            {
                $contact = Contacts::where('id', $id)->first();
                if($contact){
                    $contact->firstname = $request->firstname;
                    $contact->lastname = $request->lastname;
                    $contact->middlename = $request->middlename;
                    $contact->username = $request->username;
                    $contact->email = $request->email;
                    $contact->update();

                    $contacts = Contacts::all();
                    return redirect('/contacts')->with("message","Successfully Updated Contact");
                }else{
                    return redirect('/contacts')->with("message","Contact not found.");
                }
            }
            else
            {
                return redirect('/contacts')->with("message","Something wrong with the Inputs.");
            }
            
        }
        
        public function delete(Request $request, $id)
        {
            $contact = Contacts::where( 'id' , request()->id )->first();
            if($contact){
                $contact->delete();
                $contacts = Contacts::all();
                return redirect('/contacts')->with("message","Successfully Deleted Contact");
            }else{
                return redirect('/contacts')->with("message","Contact not found.");
            }
           
        }

        
}


 

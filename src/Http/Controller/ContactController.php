<?php
declare(strict_types=1);


namespace Tudy\Contact\Http\Controller;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tudy\Contact\Models\Contact;
use Mail;
use Tudy\Contact\Mail\ContactMailable;


/**
 * Class ContactController
 * @package Tudy\Contact\Http\Controller
 */
class ContactController extends Controller
{

    public function index()
    {
        return view('contact::contact');
    }





    public function send(Request $request)
    {
        //Mail našte email z configuračního souboru config/ contact.php
        Mail::to(config('contact.send_email_to'))
            ->send(new ContactMailable($request->message, $request->name));

        Contact::create($request->all());
        return redirect(route('contact'));
    }

}
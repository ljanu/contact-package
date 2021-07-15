<?php

namespace Tudy\Contact\Mail;

use Illuminate\Mail\Mailable;

class ContactMailable extends Mailable
{
    public $message;
    public $name;





    public function __construct($message, $name)
    {
        $this->message = $message;
        $this->name    = $name;
    }





    public function build()
    {
        return $this->markdown('contact::contact.email')
            ->with(['message' => $this->message, 'name' => $this->name]);
    }
}
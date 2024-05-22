<?php

namespace App\Http\Controllers;

use App\Mail\MailToOrganization;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends BaseController
{
    public function sendMessage(Request $request){
        $comingrezultresponse='';

            try {
                    $response= Mail::to('zakaryan75@yahoo.com')->send(new MailToOrganization([
                        "fullname" =>$request->fullname,
                        "number_guest" => $request->number_guest,
                        "message" => $request->message,
                        "coming_rezult" => $request->coming_rezult=="yes" ? "Գալու ենք" : "Չենք գալու",
                    ],
                 ));
                Mail::to('Kevine1electrical@gmail.com')->send(new MailToOrganization([
                    "fullname" =>$request->fullname,
                    "number_guest" => $request->number_guest,
                    "message" => $request->message,
                    "coming_rezult" => $request->coming_rezult=="yes" ? "Գալու ենք" : "Չենք գալու",
                ],

                ));
              

                    return  $this->sendResponse( $response,'Ձեր պատասխանը հաջողությամբ ուղարկվել է');
              } catch (\Exception $e) {

                  return $e->getMessage();
              }



    }
}

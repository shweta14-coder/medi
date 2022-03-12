<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function userOTP(Request $req)
    {
        $phone = $_POST["mobile"];
        $num = $req->input('mobile');
        $message=rand(99999,999999999);
        $mobile="$num";
        $sender="$num";
        $post = "sender=".urlencode($sender)."$mobile=".urlencode($mobile)."$message=".urlencode($message)."";
        $url = 'https://medibhai.com/api/cowinAPI/generate_OTP?to='. $mobile . '&text=' . $message;
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $err = curl_error($ch);  
        curl_close($ch);
        return $response;
        //session_start();
        // $phone = $_POST["mobile"];
        //   $num = $req->input('mobile');
        //   $otp = mt_rand(99999,999999999);

        //  $api_key = "9021434305-c3506106-9280-46d2-8d21-6cf2ef9f6327";
        //  $mobile= "$num";
        //  $sender="$num";
        //  $message=rand(99999,999999999);


        // $post = "sender=".urlencode($sender)."$mobile=".urlencode($mobile)."$message=".urlencode($message)."";
        // $url = "https://medibhai.com/api/cowinAPI/generate_OTP?api_key=$api_key";
        // $ch = curl_init();
        // $timeout = 30;

        //  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
        //  curl_setopt($ch, CURLOPT_URL, $url);
        //  curl_setopt($ch, CURLOPT_POST, 1);
        //  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        //  $result = curl_exec($ch);

        // $_SESSION['message']= "otp sent successfully";
        // // echo $_SESSION['message'];
        // // exit;
        // return $req->input();
        // return view('user');

        //    return $req->input();


        //     public function generateOTP(){
        //         $otp = mt_rand(1000,9999);
        //         return $otp;
        //     }
        //     public function submitForm(){
        //         $mobile = request('mobile');
        //         $authKey =  env('AUTH_KEY',"");
        //         if($mobile==''){
        //             return json_encode(array('statusCode'=>400,'msg'=>"Mobile number not valid".$mobile));
        //         }
        //         else{

        //             $otp = $this->generateOTP();
        //             $message = 'you otp is '.$otp;

        //            session(['mobile'=> $mobile]);
        //            session(['otp' => $otp]);
        //             return json_encode(array('statusCode'=>200,'msg'=>'otp sent successfully'.$otp));
        //         }

        //     }
        //    //public function submitOtp(){
        // //         $otp = trim(request('otp'));
        // //         if($otp==''){
        // //             return json_encode(array('statusCode'=>400,'msg'=>"otp not valid"));
        // //         }
        // //         else{
        // //             $user = new OtpVerify;
        // //             if($otp == session('otp')){
        // //             $mobile = session('mobile');
        // //             $user->save();
        // //             session()->flush();
        // //             json_code(array('statusCode'=>200,'msg'=>'sucess'));
        // //         }
        // //         else{
        // //             return json_encode(array('statusCode'=>400,'msg'=>"otp not valid"));
        // //         }
        // //     }
        // // }
        // public function show(){
        //     return view('user');
        // }

function userVerify(){
    
}
    }
}

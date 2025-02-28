<p>Dear {{ $admin->name }}</p>
<p>
    Your password on Laravecom system was changed sucessfully.
    Here is your new login credentials:
    <br>
    <b>Login ID: </b>{{ $admin->username }} or {{ $admin-> email }}
    <br>
    <b>Password: </b>{{ $new_password }}
</p>
<br>
PLease, keep your credentials confidential. Your username and password are your own credentails and you should 
never share this with any body.
<p>
    Laravecom will not be liable for any misuse of your username and password 
</p>
<br>
--------------------------------------------------------
<p>
    This email was automatically send by Laravecom sys.Do not reply it.
</p>
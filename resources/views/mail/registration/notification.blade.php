@component('mail::message')
# Hi {{ $first_name }},

Thank you for registering for My free Pattern drafting class.\
I am so excited😁😁 to introduce you to the\
*Foundations of Modern Fashion design* and also meet you __in real life__.

I have a lot of valuable information and techniques to share with you!!!

@component('mail::subcopy')
__Important!__\
Because this is an hands-on class, there only a few slots availaible and there is a selection process. You will be contacted once you are selected.

@endcomponent

\
Good luck,<br><br>
<img src="http://freeclass.test/images/Kehinde-oni-avatar.jpg" alt="Kehinde Oni" title="Kehinde Oni, Creative Director, Image Clothia Innovations" width="90"><br>
**Kehinde Oni.**<br>
Creative Director,<br>
{{ config('app.name') }} Innovations.
@endcomponent

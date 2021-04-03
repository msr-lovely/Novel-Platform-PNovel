@extends('layouts.frontend')

@section('content')
<big-header>Privacy Policy</big-header>

<div class="ql-viewer">
<p>The following webpage outlines {{ config('app.name') }}’s collection and use of personal information from it’s users. {{ config('app.url') }} values the privacy of our members and users, we will never share any personal information of anybody who logs on to {{ config('app.name') }} with anyone. This includes your e-mail address, name, and location. Upon logging on to {{ config('app.name') }} such things as your IP address and hostname are logged for statistical and security reasons.</p>


<h2>Cookies</h2>
<p>A cookie is a very small text file placed on your system upon logging on to {{ config('app.name') }} (and most other websites). This file serves as your identification card and is uniquely yours, and can only be read by the server that gave it to you. Cookies tell us that you have returned to a specific web page on {{ config('app.name') }} and help us track your preferences and transactional habits. The basic function of cookies is to help our server remember who you are.</p>


<h2>Children’s Privacy</h2>
<p>{{ config('app.name') }} does not knowingly collect personal data from children under the age of 13. We make reasonable efforts to prevent someone who is underage from joining as a member of {{ config('app.name') }}, and will not collect information from them. If {{ config('app.name') }} learns that a child under the age of 13 has become a member, we will close that child’s account and delete any information collected about the child.</p>

<p>Not withstanding the foregoing, {{ config('app.name') }} may choose to retain some personal information such as the child’s e-mail address as a means to prevent the child from re-registering at our website. The Children’s Online Privacy Protection Act (COPPA) went into effect in April 2000, and as a result websites all over the world wide web had to change their standards to not collect any information from a child.
</p>

<h2>Disclosing Information</h2>
<p>{{ config('app.name') }} may store and disclose personal information allowed or required by applicable law or when deemed advisable by us. This means that we may make disclosures that are necessary to conform to legal and regulatory requirements or processes and to protect the rights, safety, and property of {{ config('app.name') }}, users of the {{ config('app.name') }} website, and the public.</p>


<h2>Security</h2>
<p>At {{ config('app.name') }} we make reasonable efforts to protect personal information such as passwords and use technology such as encryption, access control procedures, firewalls, and physical security. We urge you to use a unique password with both letters and numbers to protect your account on {{ config('app.name') }} and it’s affiliated websites. If others, including family, friends or other household members access and use the message board through your login credentials, you are responsible for the actions of that individual. Only in extreme cases will your account be fully terminated.</p>

<h2>Third Parties</h2>
<p>Third Party websites may collect information from users of {{ config('app.name') }}, this information will include your IP address, hostname, and information about your system to help us serve you better. These are purely used for statistical reasons, and will not be used in any way other than that. Some programs that may collect this information include: Google.</p>
Website Policy Changes

<p>{{ config('app.name') }} reserves the right to change this, and any other policy located on our website at anytime without notifying our users.</p>
</div>

@endsection


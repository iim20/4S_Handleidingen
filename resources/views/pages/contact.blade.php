@extends('layouts.default')

@section('introduction_text')
<p>{{ __('introduction_texts.homepage_line_1') }}</p>
<p>{{ __('introduction_texts.homepage_line_2') }}</p>
<p>{{ __('introduction_texts.homepage_line_3') }}</p>
@endsection

@section('content')


<div class="container">
    <!-- Example row of columns -->
    <div class="row contact-formulier">

        <div style="text-align:center; padding-top:10px">
            <h2>Contact Us</h2>
            <p>Swing by for a cup of coffee, or leave us a message:</p>
        </div>
        <div class="row">
            <div class="column">
                <form action="#">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    <label for="country">Country</label>
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.."
                        style="height:170px"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>

    </div>

</div>

@endsection
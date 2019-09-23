<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML form post tester results</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php if (empty($_POST)): ?>
    <h1>Oops, no POST data was received</h1>
    <p>Please check your code for the following possible mistakes and try again.</p>
    <ul class="problems">
        <li class="problem">
            <h3>Possible problem 1 : Does your form tag contain a <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form#attr-method">POST method</a>?</h3>
            <p>If not, you form will be submitted via the GET-method, meaning that your formvalues will be visible in the URL-bar of your browser.</p>
            <h4>Solution: add the post method to your form</h4>
            
            <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;form</span> <span style="color: #0000CC">method=</span><span style="background-color: #fff0f0">&quot;post&quot;</span><span style="color: #007700">&gt;</span></pre></div>

        </li>

        <li class="problem">
        <h3>Possible problem 2 : Are your input elements named correctly?</h3>
        <p>If an input does not have a name attribute, there is no way for the server to identify and receive those fields.</p>
        <h4>Solution: name all your input elements</h4>
        
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;input</span> <span style="color: #0000CC">type=</span><span style="background-color: #fff0f0">&quot;text&quot;</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;firstname&quot;</span><span style="color: #007700">&gt;</span></pre></div>


    </li>
    </ul>
<?php else: ?>
    <h1>Your form posted the following data</h1>
    <?php foreach ($_POST as $key => $value): ?>
<pre>
<?php echo $key; ?> = <?php echo $value; ?>
</pre>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>
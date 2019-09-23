<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Form Post Tester</title>
    <meta name="description" content="Test any HTML form by posting data to this page."/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Test any HTML Form</h1>
    <h2>What is this tool?</h2>
    <p>When building HTML forms, you something just want to see if the form is working the way you expect. 
    This tool helps you <strong>test your HTML forms</strong> by displaying all the data that is received after submitting your form.</p>
    <p>It's easy to forget naming input elements correctly in HTML. This tool will catch those mistakes for you.</p>

    <h2>How to test your HTML form?</h2>
    <p>Just use the following URL as an action for your forms and set your method to POST, like this:</p>
    <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;form</span> <span style="color: #0000CC">method=</span><span style="background-color: #fff0f0">&quot;post&quot;</span> <span style="color: #0000CC">action=</span><span style="background-color: #fff0f0">&quot;https://formtester.goodbytes.be/post.php&quot;</span><span style="color: #007700">&gt;</span></pre></div>
    <p>After that, submit your form and you'll see all the data that can be received from it. Good luck!</p>

    <?php include_once 'footer.php'; ?>
</body>
</html>
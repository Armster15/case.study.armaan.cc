<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <?PHP
        #$file = "rickrollCounter.txt";
        #$document = file_get_contents($file);
        #$num = $document + 1;
        #file_put_contents($file, "{$num} People Proudly Rickrolled since April 15, 2020");
        
        // Ancient crappy txt code
        
        
        #rickrollRawCount.txt is the raw counter which contains the raw number of rickrolls
        
        #rickrollCounter.html contains the formatted rickroll count, along with some "informative" text
        $file2 = "rickrollRawCount.txt";
        $document2 = file_get_contents($file2);
        $num2 = $document2 + 1;
        file_put_contents("rickrollCounter.html", "<code><strong>{$num2}</strong> People Proudly Rickrolled since April 15, 2020</code>");
        
        file_put_contents($file2,$num2) #update rawCount.txt
        
        ?>
        
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="0; url=https://www.youtube.com/watch?v=dQw4w9WgXcQ">
        <script type="text/javascript">
            window.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
        </script>

        
        <title>Page Redirection</title>
    </head>
    <body>
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        If you are not redirected automatically, follow this <a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ'>link to example</a>.
    </body>
</html>

<!-- 
I stole the code from Stack Overflow :)
https://stackoverflow.com/a/5411601/5721784
-->
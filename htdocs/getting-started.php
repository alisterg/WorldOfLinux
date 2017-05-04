<?php
    include './includes/header.php';
?>

<title>Getting Started</title>


</head>

<body>

<?php
    include './includes/nav.php';
?>

<div class="bodycontainer">
    <div class="contents">
    
        <h1>Getting Started</h1>
        
        <?php
            include './includes/sharer.php';
        ?>   

        <h2>The User Interface</h2>
                 
            <h3>GUI vs CLI</h3>
            <p>A common misconception about Linux is that you need to know how to operate a CLI (Command Line 
            Interface). While this may have been true in the past, many modern Linux distributions come
            with sleek, intuitive GUIs.</p>
            <p>Learning the command line is unnecessary for regular users, however it is beneficial for programmers,
            systems administrators and troubleshooters to be comfortable with this powerful tool.</p>
            <figure>
            <img src="./res/ubuntu.png" width="724" height="407"/>
            <figcaption>An example Linux GUI</figcaption>
            </figure>

        <h2 id="shell">Shell vs Terminal</h2>
        
            <h3>Shell</h3>
            <p>A shell is a command interpreter which runs inside a terminal. When the user enters a command, 
            the shell executes the command. The most common shell is <strong>Bash</strong>, which happens
            to come pre-installed on most Linux distros, and is what we will  be using in all tutorials.</p>
            
            <h3>Terminal</h3>
            <p>A terminal emulator is the program in which the user types shell commands. The shell runs
            inside a terminal program. For simplicity's sake, assume that <b>terminal</b> and <b>terminal
            emulator</b> are the same thing.</p>
            
            
            <div class="leaderboard" align="center">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- leaderboard -->
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:728px;height:90px"
                        data-ad-client="ca-pub-2259531071904269"
                        data-ad-slot="5180385834"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
            </div>    
        
        <h2>Entering Commands</h2>
        
            <p>To open the terminal emulator, look in the menu for <b>terminal</b>.</p>
            <p>When you first open a <a class="bodylink" href="#shell">terminal</a>, you are presented with some text.</p>
            <figure>
            <img src="./res/cli.png" width="724" height="194"/>
            <figcaption>The terminal running Bash</figcaption>
            </figure>
            <p>This text is called the <b>shell prompt</b> and can be changed. You enter shell commands
            by entering text and pressing <b>enter</b>. To repeat a previous command, use the up/down
            arrow keys to cycle through them.</p>
            <p>Try entering the following command:</p>
            <p class="code">username@computername : $ echo "hello world"</p>
        

        <h2 id="rootuser">Root user</h2>
        <p>The root user or superuser is a special administrative user account which has complete
        control over the system. You can execute commands as root using <b>sudo</b>.</p>
        <p>Commands which require root privileges can cause damage to your system.</p>
        <p style="color:red;">Never use sudo unless you know the exact purpose of the command you are using.</p>
        
        <h2>Summary</h2>
        <ul><li>A CLI is a text-based interface for performing advanced tasks and scripting.</li>
            <li>The shell is the program that interprets the commands entered into the terminal.</li>
            <li>Always be cautious when entering commands found online.</li>
        </ul>
        
        <div class="leaderboard" align="center">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- leaderboard -->
                <ins class="adsbygoogle"
                    style="display:inline-block;width:728px;height:90px"
                    data-ad-client="ca-pub-2259531071904269"
                    data-ad-slot="5180385834"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
        </div>


        <div class="chapter">
            
            <div class="previous"><a href="./install-linux.php">Previous Tutorial</a></div>
            <div class="index"><a href="./learn-linux.php">Index</a></div>
            <div class="next"><a href="./filesystem.php">Next Tutorial</a></div>
        </div>

    </div>
    
    <div class="skyscraper">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- tutorial_ad -->
            <ins class="adsbygoogle"
                style="display:inline-block;width:160px;height:600px"
                data-ad-client="ca-pub-2259531071904269"
                data-ad-slot="3284850237"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    
<div style="clear:both;"></div>
</div>
<script src="../scripts/backtop.js"></script>

<?php
    include './includes/footer.php';
?>


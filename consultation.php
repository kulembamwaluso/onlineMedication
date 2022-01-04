<!DOCTYPE html>
<html>
    <head>
        <title>Doctor's Room</title>
        <link rel="stylesheet" href="consult.css">
    </head>
    <body>
        <div class = "nav-bar" id = "nav-bar">
            <nav>
                <ul>
                    <li><a href = "doctor consultation/index.html">home</a></li>
                    <li><a href = "doctor consultation/aboutUs.html">About us</a></li>
                    <li><a href = "doctor consultation/consultation.html">consultation room</a></li>
                    
                    <li><a href = "News page/news.html">News</a></li>
                    
                </ul>
            </nav>
        </div>
        <h1>
            Welcome to the Doctor's Room feel at Home!
        </h1>
        <h2>What is the problem?. choose by ticking</h2>
        <form action="consult.php" method="post">
        <table>
            <tr>
            <div class="right">
            
            
                <input type="checkbox" name="head">
                <label value="head">Headache</label> <br>

                <input type="checkbox" name="fever">
                <label>Fever</label><br>

                <input type="checkbox" name="vomiting">
                <label>Vomiting</label><br>

                <input type="checkbox" name="bodypain">
                <label>General body Pain</label> <br>

                <input type="checkbox" name="Stomach">
                <label>Stomachache</label><br>

                <input type="checkbox" name="joint">
                <label>Joint pains</label>
            </div>
        </tr>
        <tr>
        <div class="left">
           
                <input type="checkbox" name="Rashes">
                <label>Rashes</label><br>

                <input type="checkbox" name="apetite">
                <label>Loss of Apetite</label><br>
            
                <input type="checkbox" name="Tooth">
                <label>Toothache</label><br>
            
                <input type="checkbox" name="diarr">
                <label>Diarrhea<label><br>
            
                <input type="checkbox" name="wound">
                <label>Wounds</label><br>
            
                <input type="checkbox" name="sole">
                <label>Sole Throte</label><br>

            <hr>
        </div>
       </tr>
            <div class="textArea">
                
          <h2 style="color:black;   ">
            write anything you feel that is not above</h2>
            <textarea rows="10" cols="25" placeholder="write here" name="textArea" ></textarea>
        </div>
        <div class="submit">
            <input type="submit" value="send" name="submit">
            <input type="reset" value="Clear" name="clear">
         </div>
        </table>
    </form>
        
    </body>
</html>
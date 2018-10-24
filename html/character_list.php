<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="character_list.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Character List/Selection</title>

    <script>
        $(document).ready(function() {
            $('.charSelectBorder').click(function() {  
                $(this).toggleClass('charSelectBorderClicked');
                });
            });
    </script>

    </head>

    <body>
        <div class="borderSize">
            <h1 class="charHeadingBorder"> Characters:</h1>

        </div>

        <div class="charborderSize">
            <div class="charSelectBorder">
                <div style="float: left; width: 25%;">
                    Level:  <span class="numberCircle">13</span>
                </div>
                <div style="float: left; width: 25%;">Name: Bob </div>
                <div style="float: left; width: 25%;">Race: Elf</div>
                <div style="float: left; width: 25%;">Class: Mage</div>
                <br style="clear: left;" />
            </div>

            <div class="charSelectBorder">
                    <div style="float: left; width: 25%;">
                        Level:  <span class="numberCircle">5</span>
                    </div>
                    <div style="float: left; width: 25%;">Name: Bill </div>
                    <div style="float: left; width: 25%;">Race: Orc</div>
                    <div style="float: left; width: 25%;">Class: Fighter</div>
                    <br style="clear: left;" />
            </div>

            <div class="charSelectBorder">
                    <div style="float: left; width: 25%;">
                        Level:  <span class="numberCircle">20</span>
                    </div>
                    <div style="float: left; width: 25%;">Name: Bilbo </div>
                    <div style="float: left; width: 25%;">Race: Hobbit</div>
                    <div style="float: left; width: 25%;">Class: Thief</div>
                    <br style="clear: left;" />
            </div>

            <div class="charSelectBorder">
                    <div style="float: left; width: 25%;">
                        Level:  <span class="numberCircle">20</span>
                    </div>
                    <div style="float: left; width: 25%;">Name: Bilbo </div>
                    <div style="float: left; width: 25%;">Race: Hobbit</div>
                    <div style="float: left; width: 25%;">Class: Thief</div>
                    <br style="clear: left;" />
            </div>


            <div class="charSelectBorder">
                    <div style="float: left; width: 25%;">
                        Level:  <span class="numberCircle">20</span>
                    </div>
                    <div style="float: left; width: 25%;">Name: Bilbo </div>
                    <div style="float: left; width: 25%;">Race: Hobbit</div>
                    <div style="float: left; width: 25%;">Class: Thief</div>
                    <br style="clear: left;" />
            </div>
        </div>

        <div class="charborderSize">
            <div class="createChar">
                + Create
            </div>
        </div>

        <div class="borderSize">
                <h1 class="charHeadingBorder"> DM Tools</h1>
    
        </div>

    </body>
</html>
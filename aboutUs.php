<!DOCTYPE html>
<html>
    <head>
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

        <meta name="viewport" content="width=device-width,initial-scale=1" />

        <style>
            * {
                box-sizing: border-box;
            }

            /* Create two equal columns that floats next to each other */
            .column {
                float: left;
                width: 50%;
                padding: 20px;
                height: 300px; /* Should be removed. Only for demonstration */
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            @media screen and (max-width: 600px) {
                .row,
                .column,
                .column-50 {
                    width: 100%;
                    margin-top: 0;
                }
            }
        </style>
    </head>
    <body>
        <div class="row" style="background-color: #fafafc; margin-left: 100px; margin-right: 100px; height: 320px; font-size: 16px; text-align: justify-all; text-justify: auto;">
            <div class="column" style="padding-left: 50px; font-family: sans-serif; width: 33.3%;">
                <!-- <div class=" row-75" style="background-color: red;"> -->

                <h2><b>Our Location</b></h2>
                <br />
                <p style="font-size: 13px; margin: 0em; font-family: sans-serif;">350 5th Tokyo,Japan,NY10118</p>
                <p style="font-size: 13px; margin: 0em; font-family: sans-serif;">1 212-736-3100</p>
                <p style="font-size: 13px; margin: 0em; color: blue; font-family: sans-serif;">contacts@jhaggujpn.com</p>
                <br />

                <p style="font-size: 13px; margin: 0em; font-family: sans-serif;">Corporate Headquarters</p>
                <p style="font-size: 13px; margin: 0em; font-family: sans-serif;">4461 Wade Ave.</p>
                <p style="font-size: 13px; margin: 0em; font-family: sans-serif;">Perris, California 92571</p>
                <p style="font-size: 13px; margin: 0em; font-family: sans-serif;">(951) 657-5300</p>
                <br />
            </div>

            <div class="column" style="width: 33.3%;">
             

                <h2 style="margin-left: 30px; font-family: sans-serif;"><b>Services</b></h2>
                <br />

                <div class="column" style="width: 50%;">
                    <p style="font-size: 13px; margin: 0em; font-family: sans-serif;">Register In bid online</p>
                    <p style="font-size: 13px; margin: 0em; font-family: sans-serif;">Auction Calendar</p>
                    <p style="font-size: 13px; margin: 0em; font-family: sans-serif;">How to buy?</p>
                    <p style="font-size: 13px; margin: 0em; color: black; font-family: sans-serif;">Auction Terms</p>
                </div>

                <div class="column" style="width: 50%;">
                    <p style="font-size: 13px; margin: 0em; color: black; font-family: sans-serif;">Bid-in Person Register</p>
                    <p style="font-size: 13px; margin: 0em; color: black; font-family: sans-serif;">How to sell?</p>
                    <p style="font-size: 13px; margin: 0em; color: black; font-family: sans-serif;">Buy it now!!</p>
                    <p style="font-size: 13px; margin: 0em; color: black; font-family: sans-serif;">Other Services</p>
                </div>
              
            </div>

      

            <div class="column-50" style="padding-left: 50px; font-family: sans-serif; width: 33.3%;">
                <h2><b>About Us</b></h2>
                <br />
                <p style="font-size: 13px; margin: 0em; font-family: sans-serif;">
                    A auction service based company launced as a main office in Tokyo.For this ,users have to pay certain charges on the basis of their voulme.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu sem ex. Etiam
                    sit amet lorem a tellus cursus malesuada. Praesent lacinia dapibus elementum. Integer congue imperdiet velit non rhoncus. Vestibulum vehicula ut nibh ac imperdiet. Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. Sed pretium enim a enim pharetra sagittis.
                </p>
                <!-- <p style="font-size: 13px; margin: 0em;">For this ,users have to pay certain charges on the basis of their voulme.</p> -->
            </div>

            <div class="footer" style="background-color: #bdbab4; height: auto; width: 100%;">
                <p style="padding-left: 400px; padding-top: 30px; font-size: 14px; font-family: sans-serif;">Copyright2020@The Auction Company</p>
            </div>
        </div>
    </body>
</html>

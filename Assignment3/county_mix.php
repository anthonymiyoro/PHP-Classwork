<!-- NOTE!!! All the relevant code is within the PHP tags -->

<!DOCTYPE html>
    <head>
        <title>🤢County Mix 🤢</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php 
            // a string of county data
            $county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
            2. Kwale. – Salim Mvurya – Jubilee,
            3. Kilifi. – Amason Jeffah Kingi – ODM,
            4. Tana River. – Dhadho Godhana – ODM,
            5. Lamu. – Fahim Yasin Twaha – Jubilee,
            6. Taita-Taveta. – Granton Samboja – WDM K,
            7. Garissa. – Ali Bunow Korane – Jubilee,
            8. Wajir. – mohamed Abdi Mohamud – Jubilee,
            9. Mandera. – Ali Ibrahim Roba - Jubilee,
            10. Marsabit – Mohamud Mohamed Ali – Jubilee,
            11. Isiolo – Mohamed Abdi Kuti – Independent,
            12. Meru – Kiraitu Murungi – Jubilee,
            13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
            14. Embu – Martin Nyaga Wambora – Jubilee,
            15. Kitui – Charitu Ngilu – Narc Kenya,
            16. Machakos – Alfred Mutua – MCC,
            17. Makueni – Kivutha Kibwana – WDM K.,
            18. Nyandarua – Francis Kimemia – Jubilee,
            19. Nyeri – Patrick Wahome Gakuru – Jubilee,
            20. Kirinyaga. – Ann Waiguru – Jubilee,
            21. Murang’a – Mwangi wa iria – Jubilee,
            22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
            23. Turkana. – Josphat Nanok – ODM,
            24. West Pokot. – John Krop Lonyang’apuo. – KANU,
            25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
            26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
            27. Uasin gishu. – Jackson Mandago – Jubilee,
            28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
            29. Nandi. – Stephen Sang – Jubilee,
            30. Baringo – Stanley K Kipris. – Jubilee,
            31. Laikipia – Ndiritu Muriithi – Independent,
            32. Nakuru. – Lee Kinyanjui – Jubilee,
            33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
            34. Kajiado. – Joseph Ole Lenku – Jubilee,
            35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
            36. Bomet. – Joyce Laboso – Jubilee,
            37. Kakamega. – Wyclife Oparanya – ODM,
            38. Vihiga. – Wilber Ottichilo – ODM,
            39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
            40. Busia. – Sospeter Ojaamong – ODM,
            41. Siaya. – Cornel Rasanga. – ODM,
            42. Kisumu. – Peter Anyang Nyong’o. – ODM,
            43. Homabay. – Cyprian Awiti – ODM,
            44. Migori. – Zachary Okoth Obado – ODM,
            45. Kisii. – James Ongware – ODM,
            46. Nyamira. – John Nyangarama Obiena - ODM,
            47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";


            // You should not modify anything above this line
            // Your code starts here
            
            // Split everything behind comma and put in array
            // $county_data_arr = preg_split("/\,/", $county_data); 
            // $counter = 1;

            // Loop through array and split the individual entries
            // foreach($county_data_arr as $val) {
            //     print "$val <br />";
            //     $counter = $counter + 1;
            // }
            // we want to build a list of friends, explode returns an array with
            // split array

            $friends = "ndingu, mburu, wambui, omosh";
            $friends_arr = explode(',',$friends);
            // var_dump($friends_arr);
            // print_r($friends_arr);
            
            // count number of items in string
            $county_arr = explode(",",$county_data);
            echo count($county_arr);
            print_r   ($county_arr);


            ?>

            <ul>
                <li>Test</li>
            </ul>
</table>
    </body>

    <footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    </footer>

</html>
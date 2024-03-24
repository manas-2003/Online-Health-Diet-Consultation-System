<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/welcome.css">
    <link href='https://fonts.googleapis.com/css?family=Paytone One' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <title>ONLINE HEALTH DIET CONSULTATION SYSTEM</title>


    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <style>
        .my-5{ 
            font-family: 'Fugaz One', cursive;
            text-align: center;
        }
        
        #reset_signout{
            margin-top:30px;
        }

        #reset-password{
            font-family: 'Fugaz One', cursive;
            font-size: 20px;
            height: 37px;
            color: blue;
            text-align: center;
            margin-left:450px;
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 8px;
            background-color: #c2fbd7;
            border-radius: 100px;
            box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
            color: green;
            cursor: pointer;
            display: inline-block;
            font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            transition: all 250ms;
            border: 0;
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        #reset-password:hover{
            box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
        }

        #signout{
            font-family: 'Fugaz One', cursive;
            font-size: 20px;
            color: blue;
            text-align: center;
            margin-left:80px;
            box-shadow: rgb(21, 139, 175) 0px 54px 55px, rgba(166, 2, 255, 0.95) 0px -12px 30px, rgb(9, 255, 157) 0px 4px 6px, rgba(49, 238, 7, 0.972) 0px 12px 13px, rgb(228, 252, 8) 0px -3px 5px;
            border-radius: 8px;
            background-color: #c2fbd7;
            border-radius: 100px;
            box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
            color: green;
            cursor: pointer;
            display: inline-block;
            font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            transition: all 250ms;
            border: 0;
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }
        
        #signout:hover{
            box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
            transform: scale(1.05) rotate(1deg);
        }

        .calorie-counter1{
            margin-bottom: 200px;
            margin-top: -350px;
        }


    </style>
</head>
<body>
    <div class="head">
        <head>ONLINE HEALTH DIET CONSULTATION SYSTEM</head>
    </div>

   <div class="resetAndSignoff">
        <h1 class="my-5">Hi, <b id="diet"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
            <p id="reset_signout">
                <a href="reset-password.php" class="btn btn-warning" id="reset-password">Reset Your Password</a>
                <a href="logout.php" class="btn btn-danger ml-3" id="signout">Sign Out of Your Account</a>
            </p>
   </div>

    <div class="heading_img">
        <img src="https://www.saberhealth.com/uploaded/blog/images/doctor-holding-fresh-fruit-in-her-hands(1).jpg"  alt="Here is a image"  id="img_head">
    </div>
        <main class="content">
            <article class="card" id="sleep">
                <h1>Sleep is Medicine</h1>
                <span>
                    Poor sleep is linked to obesity, heart disease,stroke, cancer, and dementia. Aim to sleep 7 or more hours each night.
                </span>
            </article>
            <article class="card" id="excercise">
                <h1>Excercise is Medicine</h1>
                <span>
                    Help your heart,mind and body by moving more throughout the day. The journey of a thousand.
                </span>
            </article>
            <article class="card" id="love">
                <h1>Love is Medicine</h1>
                <span>
                    Show gratitude, make time for family and friends, practice mindfulness, and pass the gift of kindness to others.
                </span>
            </article>
            <article class="card" id="food">
                <h1>Food is Medicine</h1>
                <span>
                    You don't need to follow the latest fad diet. A Whole food Plant-Based diet is proven to improve every aspect of your health.
                </span>
            </article>
        </main>
    <div class="videos">
        <div class="videos_head">
            <h1><i id="diet"> Health </i>And <i id="diet">Diet </i> Videos</h1>
        </div>
        <div class="videosAll">
            <iframe  class="child-obesity" width="460" height="310" src="https://www.youtube.com/embed/gQK4vj1Lzlg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
            <iframe width="460" height="310" src="https://www.youtube.com/embed/fvsaHvLPX7s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/XU1ih_jnS8s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/vH7N0lfUV4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/PCB8h6fG0FY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/-b9dpwoabR8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/mH-2nt-o2jY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/dzoAOiBt5no" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/agKewFoM8bg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/TifDx7nGOUo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/Gmh_xMMJ2Pw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/jwWpTAXu-Sg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <iframe width="460" height="310" src="https://www.youtube.com/embed/b5yz-4YXiU4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/1_aQNep9KJk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/Q89St6BTxIQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/Q89St6BTxIQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/PwHGvVICLCQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/CXti58Y_z_E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/NqV1Ig4_nfI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/AhdFpWBeJSQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/xyQY8a-ng6g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/fIQXWTt57WQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/YPl0naO6GR0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/fqhYBTg73fw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/a-084pqI05U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/8V15Z-yyiVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="460" height="310" src="https://www.youtube.com/embed/YimuIdEZSNY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <br>
            <br>
            <button onclick="window.location.href='diet_videos.html'" class="button-85" role="button"><b><i>More Videos</i></b></button>
            <br>
            <br>
        </div>
    </div>
    <div class="diet_designed_by_experts">
        <div class="diet_designed_by_experts_head">
            <head><i id="diet"> Diets </i> Designed By Experts</head>
        </div>
        
        <div class="content1">
            <article class="card1" id="mediterranean" onclick="window.location.href='mediterranean.html'">
                <img src="https://peater.net/sites/default/files/2020-03/ico-klasyczna-en.svg"  id="img_mediterranean" alt="">
                <h1>Mediterranean Diet</h1>
                <span>
                    <!-- Maintain a healthy weight without stressing over what to eat. This popular weight loss plan offers nutritious meals from a diverse menu, so that healthy eating becomes a core part of your lifestyle. -->
                </span>
            </article>
            <article class="card1" id="convenience" onclick="window.location.href='convenience.html'">
                <img src="https://peater.net/sites/default/files/2020-03/ico-wygodna-en.svg" id="img_convenience" alt="">
                <h1>Convenience Diet</h1>
                <span>
                    <!-- You love eating, but you’re not so in love with cooking?! No problem, Peater has designed this diet plan for people on-the-go, traveling, or clumsy in the kitchen. Simple, quick recipes with little prep-time or skills required. -->
                </span>
            </article> 
            <article class="card1" id="on_a_budget" onclick="window.location.href='on_a_budget.html'">
                <img src="https://peater.net/sites/default/files/2019-12/ico-calc.svg" alt="" id="img_on_a_budget">
                <h1>On-A-Budget Diet</h1>
                <span>
                    <!-- Eat healthy on a budget! This plan is created with inexpensive products that you can find anywhere at good prices. Eating a balanced meal never has to be expensive. -->
                </span>
            </article> 
            <article class="card1" id="vegetarian" onclick="window.location.href='vegetarian.html'">
                <img src="https://peater.net/sites/default/files/2020-03/ico-wegetarianska.svg" alt="" id="img_vegetarian">
                <h1>Vegetarian Diet</h1>
                <span>
                    <!-- Live your best vegetarian life. Easily eliminate meat, fish and seafood from your diet while getting essential nutrients. This plan helps vegetarians become success stories, with a diverse and tasty menu around grains, veggies, fruits, legumes and nuts. -->
                </span>
            </article>
            <article class="card1" id="vegan" onclick="window.location.href='vegan.html'">
                <img src="https://peater.net/sites/default/files/2020-03/ico-weganska.svg" alt="" id="img_vegan">
                <h1>Vegan Diet</h1>
                <span>
                    <!--Going vegan never felt so easy! Peater’s vegan plan completely eliminates animal products from your diet so that you can worry less about where your food comes from, and focus on healthier eating.  -->
                </span>
            </article> 
            <article class="card1" id="gluten_free" onclick="window.location.href='gluten_free.html'">
                <img src="https://peater.net/sites/default/files/2020-03/ico-bezglutenowa.svg" alt="" id="img_gluten_free">
                <h1>Gluten-Free Diet</h1>
                <span>
                    <!-- Victims of gluten, worry no more. This gluten-free plan will help you feel better by eliminating gluten sources, while offering a diverse menu to supplement essential vitamin B groups and fibre. -->
                </span>
            </article>
        </div>
        <div class="content2">
            <article class="card2" id="hashimoto" onclick="window.location.href='hashimoto.html'">
                <img src="https://peater.net/sites/default/files/2020-03/ico-Hashimoto_0.svg" alt="" id="img_hashimoto">
                <h1>Hashimoto's Diet</h1>
                <span>
                    <!-- Low thyroid? Eat better to improve thryoid function. A well-planned diet for hypothyroidism or Hashimoto's disease helps exclude most dairy and gluten, while ensuring increased intake of antioxidants such as zinc, selenium and vitamin C. -->
                </span>
            </article>
            <article class="card2" id="diabetic" onclick="window.location.href='diabetic.html'">
                <img src="https://peater.net/sites/default/files/2020-03/ico-cukrzycowa.svg" alt="" id="img_diabetic">
                <h1>Diabetic Diet</h1>
                <span>
                    <!-- Controlling blood-sugar levels doesn’t mean you can’t eat great food! Diabetics and people struggling with insulin resistance can use Peater’s low-sugar plans to easily manage their glycemic index without eating a boring diet. -->
                </span>
            </article>
            <article class="card2" id="mind" onclik="window.location.href='mind.html'">
                <img src="https://peater.net/sites/default/files/2020-03/ico-MIND.svg" alt="" id="img_mind">
                <h1>MIND Diet</h1>
                <span>
                    <!-- Supercharge your brain! Designed for those who suffer from chronic stress, or people who want to take good care of their brain and keep it in a good shape until old age. This plan is packed with foods that improve your memory, focus, and reduce the risk of neurodegenerative diseases such as Alzheimer’s, Parkinson’s and SM.  -->
                </span>
            </article> 
            <article class="card2" id="dash" onclick="window.location.href='dash.html'">
                <img src="https://peater.net/sites/default/files/2020-03/ico-DASH.svg" alt="" id="img_dash">
                <h1>DASH Diet</h1>
                <span>
                    <!-- Sit back, relax and let Peater take the wheel. The DASH meal plan helps people with hypertension, high blood pressure, and prevents cardiovascular diseases such as atherosclerosis in the future. Based on a Mediterranean diet of fresh vegetables, fruit, whole-grains, fish, lean meat and low fat dairy. -->
                </span>
            </article>
            <article class="card2" id="active" onclick="window.location.href='active.html'">
                <img src="https://peater.net/sites/default/files/2020-03/ico-dla-aktywnych.svg" alt="" id="img_active">
                <h1>Active Diet</h1>
                <span>
                    <!-- Strong bodies are fueled by great diet plans. If you want to achieve weight loss, muscle gain or overall fitness, the Active diet helps you reach your goals and provides clean energy. Improve performance and optimize tissue regeneration with meals based around good carbohydrates and protein. -->
                </span>
            </article>
            <article class="card2" id="muscle_gain" onclick="window.location.href='muscle_gain.html'">
                <img src="https://peater.net/sites/default/files/2020-03/ico-na-mase.svg" alt="" id="img_muscle_gain">
                <h1>Muscle Gain Diet</h1>
                <span>
                    <!-- Get those GAINS! Increase muscle mass, increase lean body mass, and grow muscle tissue volume. Peater’s meal plans can automatically update to follow your training plan, fitness activities and calorie intake. Minimize heaviness by eating healthier, lean proteins. -->
                </span>
            </article>
        </div>

        <div class="content3">
            <article class="card3" id="high_protein" onclick="window.location.href='high_protein.html'">
                <img src="https://peater.net/sites/default/files/2020-03/ico-wysokobialkowa.svg" alt="" id="img_high_protein">
                <h1>High-Protein Diet</h1>
                <span>
                    <!-- Protein lovers, this is for you - low in fat and carbs, high in great proteins. You'll eat meals that assist in helping damaged muscle fibers recover quicker and get the right amount of macro- and micro-nutrients for training. -->
                </span>
            </article>
            <article class="card3" id="anti_inflammatory" onclick="window.location.href='anti_inflammatory.html'">
                <img src="https://peater.net/sites/default/files/2020-04/przeciwzapalna.svg" alt="" id="img_anti_inflammatory">
                <h1>Anti-inflammatory Diet</h1>
                <span>
                    <!-- General inflammation is the leading cause of most chronic diseases, and foods are responsible for a great deal of how much inflammation is in the body. Choose this meal plan to prevent inflammatory triggers, which can help a wide range of people with minor inflammation, to autoimmune diseases, including rheumatoid arthritis. Peater composed with fish, nuts, berries, green and orange vegetables, as well as ginger or turmeric—spices with a strong anti-inflammatory effect. -->
                </span>
            </article>
            <article class="card3" id="immune_boost" onclick="window.location.href='immune_boost.html'">
                <img src="https://peater.net/sites/default/files/2020-04/odpornosc.svg" alt="" id="img_immune_boost">
                <h1>Immune-boost Diet</h1>
                <span>
                    <!-- It’s no secret that foods can build your immune system and help people stay healthy and fight illness. Peater helps you outline an immunity boosting diet built on science, reducing inflammation and rich in minerals, antioxidants and vitamins. Foods like fibrous vegetables, berries, sea fish and fermented dairy products provide the nutrients needed for supporting a healthy immune system. -->
                </span>
            </article> 
        </div>
    </div>
    <br>
    <br>
    <div class="calorie-counter">
        <div class="calorie_counter_content">
            <article class="card4" id="calorie_counter" onclick="window.location.href='calorie_counter.html'">
                <h1 class="head_calorie_counter">Calorie Counter</h1>
                <span>
                    A Calorie Counter is a complete diet tracker and food journal tool that will help you quickly and easily count calories, protein, carbs, fat, sugar, cholesterol, sodium, fiber and dozens of other nutrients
                </span>
            </article>
        </div>
    </div>
    
    <div class="calorie-counter1">
        <div class="calorie_counter_content">
            <article class="card4" id="calorie_counter" onclick="window.location.href='shopping.html'">
                <h1 class="head_calorie_counter"><img src="https://bestanimations.com/uploads/gifs/1697162351rotating-red-heart-gif-animation61.gif"height="80px"width="80px" alt="">Shopping Page<img src="https://bestanimations.com/uploads/gifs/1697162351rotating-red-heart-gif-animation61.gif"height="80px"width="80px" alt=""></h1>
                <span>
               <img src="https://webstockreview.net/images/clipart-money-animated-gif-18.gif" width="600px" height="450px"  alt="">
               </span>
        </div>
    </div>

    <div class="socialMedia">
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://github.com/k-amith1610/Health-and-Diet-Consultation-System"><i class="fab fa-github"></i></a></li>
        </ul>
    </div>


    
</body>
</html>

<!-- <article class="card3" id="">
    <h1> Diet</h1>
    <span>
        
    </span>
</article>  -->
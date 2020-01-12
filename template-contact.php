<?php 

/*
Template Name: Contact
*/

?>

<?php get_header(); ?>


   

    <div class="container my-5 contact">
        <h3 class="ui dividing large header container mt-5 pt-5">
            LET'S GET IN TOUCH
        </h3>

        <div class="ui stackable grid">
            <div class="six wide column">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                <h4 class="ui medium header my-5"><i class="envelope outline icon"></i>info@catherinevelez.com</h4>
                <h4 class="ui medium header my-5"><i class="linkedin icon"></i>catherinevelez1</h4>
                <h4 class="ui medium header my-5"><i class="instagram icon"></i>catherinevelez</h4>
                <h4 class="ui medium header my-5"><i class="behance icon"></i>cvelez7</h4>
            </div>
            <div class="ten wide column mx-sm-auto">

                <div class="ui form error">

                    <div class="ten wide field">
                        <input type="text" placeholder="Name" name="name">
                    </div>
                   

                    <div class="ten wide field required">
                        <input type="email" placeholder="Email Address" name="email">
                    </div>

                    <div class="ten wide field">
                        <input type="text" placeholder="Subject line">
                    </div>

                    <div class="ten wide field">
                        <textarea name="" id="" cols="30" rows="10" placeholder="What's on your mind?"></textarea>
                    </div>
                    
                    <div class="ui submit animated button mt-3" tabindex="0">
                        <div class="visible content">Submit</div>
                        <div class="hidden content"><i class="thumbs up outline icon"></i></div>
                    </div>

                    <div class="ui vertical animated button mt-3" tabindex="0">
                        <div class="visible content">View Services</div>
                        <div class="hidden content"><i class="external alternate icon"></i></div>
                    </div>
                    


                </div>

                

            </div>
        </div>        

    </div>


<?php get_footer(); ?>




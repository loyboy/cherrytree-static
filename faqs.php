<?php include('header.php'); ?>

<style>
/*.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
}*/
</style>
   
<div class="container" style="margin-bottom: 70px; margin-top: 30px;">
    <div class="row" style="display: block;">
        <div class="col-lg-12">
            <div class="tab-content" id="faq-tab-content">

                <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                    <div class="accordion" id="accordion-tab-1">
                        <br>
                        <div><h2>(Farmer) FAQs</h2></div>
                        <hr>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-1">
                                
                                <h5 style="margin-left:10px;">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1"><span class="fa fa-plus-circle d-inline"></span> What is CherryTree?</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p> CherryTree is an online platform for local farmers to sell their food directly to customers in their area. You can sign up for free and post your products to our marketplace, and customers will preorder your goods for later pickup at your farmstand or chosen farmers market. </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-2">
                                <h5 style="margin-left:10px;">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2"><span class="fa fa-plus-circle d-inline"></span> Our Mission?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>At CherryTree, our primary goal is to help local communities and the environment by supporting

the local foods movement. We believe that we have found a way to change the way people

interact with local food systems and local farmers. Our platform is designed to give our vendors

the ability to expand their businesses and reach new customers through online sales. By

connecting our users directly with independent farmers, farm stands, and farmers’ markets in

their area, we believe that both consumers and farmers can experience the benefits of

e-commerce in their local community.
</p>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-3">
                                <h5  style="margin-left:10px;">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3"><span class="fa fa-plus-circle d-inline"></span> What can I sell on CherryTree?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p> You can sell any food you've grown or prepared locally. You can also use CherryTree to easily sell tickets for events you're planning.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-4">
                                <h5 style="margin-left:10px;">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4"><span class="fa fa-plus-circle d-inline"></span>  How can I sign up for CherryTree?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p> <a href="https://www.cherrytreemarket.com/app/sign-up" target = "_blank"> Click here </a> or download our <a href="https://apps.apple.com/us/app/cherrytree-farmers-market/id1355489783" target = "_blank"> iPhone app  </a> and follow the instructions for easy signup. We'll need to know a little bit about your business before you can get started to ensure the best experience with our platform— don't worry, we'll never sell any of your information to third parties or send you spam.  </p>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-5">
                                <h5 style="margin-left:10px;">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-5"><span class="fa fa-plus-circle d-inline"></span> How much does CherryTree cost to use?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-5" aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>At CherryTree, we understand the economic and environmental importance of small farms to local communities. We want to help you grow your operation through online sales to reduce food miles and help local economies! That's why, unlike other services, CherryTree is completely free for our vendors to use.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-6">
                                <h5 style="margin-left:10px;">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-6" aria-expanded="false" aria-controls="accordion-tab-1-content-6"><span class="fa fa-plus-circle d-inline"></span> How do I accept payments through CherryTree?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-6" aria-labelledby="accordion-tab-1-heading-6" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>CherryTree will send your payments to your business' bank account using a trusted payment processing service called Stripe. You'll only need to set up your payment information once— after you've linked your Stripe account, any payments you receive will be automatically transferred to you account by direct deposit. </p>    
                                </div>
                            </div>
                        </div>

                          <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-7">
                                <h5 style="margin-left:10px;">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-7" aria-expanded="false" aria-controls="accordion-tab-1-content-7"><span class="fa fa-plus-circle d-inline"></span> What is Stripe and why do I need to create an account?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-7" aria-labelledby="accordion-tab-1-heading-7" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p> Stripe is a trusted online payment platform that powers thousands of businesses around the world, including Lyft, Shopify, and Target. At CherryTree, we use Stripe to process our transactions quickly and securely, and to send the money you make directly to your bank. This means that you’ll need a Stripe account in order to get started with CherryTree. </p>   
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-8">
                                <h5 style="margin-left:10px;">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-8" aria-expanded="false" aria-controls="accordion-tab-1-content-8"><span class="fa fa-plus-circle d-inline"></span> How do I get a STripe account?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-8" aria-labelledby="accordion-tab-1-heading-8" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>Creating a Stripe account is quick and easy. Visit the Stripe website here to get started. Follow the directions on the Stripe website, or watch this short video for a walkthrough of the process. Note: you’ll need your bank account number, so make sure you have a blank check on hand or the ability to access your bank information online. Link: https://stripe.com/</p>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-9">
                                <h5  style="margin-left:10px;">
                                   
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-9" aria-expanded="false" aria-controls="accordion-tab-1-content-9"> <span class="fa fa-plus-circle d-inline"></span> How do I list my products on CherryTree?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-9" aria-labelledby="accordion-tab-1-heading-9" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p> Please contact our support for more information. </p>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-10">
                                <h5 style="margin-left:10px;">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-10" aria-expanded="false" aria-controls="accordion-tab-1-content-8"><span class="fa fa-plus-circle d-inline"></span> How does CherryTree track and manage my orders? </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-10" aria-labelledby="accordion-tab-1-heading-10" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p> Please contact our support for more information. </p>                                    
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-11">
                                <h5  style="margin-left:10px;">
                                   
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-11" aria-expanded="false" aria-controls="accordion-tab-1-content-9"> <span class="fa fa-plus-circle d-inline"></span> What do I need to do after I receive an order through CherryTree? </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-11" aria-labelledby="accordion-tab-1-heading-11" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p> All you'll need to do after receiving an order is to package the items and label them with the customer's name. We'll show you what orders you'll need to fill and exactly what you'll need to bring to each market.. </p>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-12">
                                <h5  style="margin-left:10px;">
                                   
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-12" aria-expanded="false" aria-controls="accordion-tab-1-content-9"> <span class="fa fa-plus-circle d-inline"></span> How does CherryTree resolve disputes with customers? </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-12" aria-labelledby="accordion-tab-1-heading-12" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p> Vendors are expected to attempt to resolve disputes amicably with their customers. However, in the event of a dispute that cannot be resolved, CherryTree support staff are available 24/7 via support@cherrytreemarket.com to rectify the situation. Refunds are available in accordance with our refund policy. </p>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-13">
                                <h5  style="margin-left:10px;">                                   
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-13" aria-expanded="false" aria-controls="accordion-tab-1-content-13"> <span class="fa fa-plus-circle d-inline"></span> Does CherryTree offer delivery? </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-13" aria-labelledby="accordion-tab-1-heading-13" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p> Currently CherryTree does not offer native delivery. However, we are currently developing features that will allow farmers to coordinate their own delivery services though CherryTree. We hope to offer our own delivery services eventually as we expand our platform. </p>
                                   
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
                
               
            </div>
        </div>
    </div>
</div>

<style type="text/css">
.accordion .card .card-header{
    padding: 0px;
}
</style>
<?php include('footer.php'); ?> 
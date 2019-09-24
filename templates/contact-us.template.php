<section id="contact" class="mt-2">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-xs-12">
            <div class="card border-primary">
                <div class="card-header bg-primary">
                    <h1 class="text-center text-white">
                        Contact Us
                    </h1>
                </div>
                <div class="card-body">
                    <?php include_once('./templates/contact-area.template.php'); ?>
                    <form action="./app/email.service.php" method="post">
                        <div class="form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name <span class="text-danger">*</span></label>
                            <input type="text" id="last-name" name="lastName" class="form-control" placeholder="Enter your last name" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="email@example.com" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Your address" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="message">Message <span class="text-danger">*</span></label>
                            <textarea name="message" id="message" rows="5" class="form-control" style="resize: none" required placeholder="Write your message..."></textarea>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <span class="form-text text-muted">All fields marked with <span class="text-danger">*</span> are required</span>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="text-center mx-auto">
                                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<main class="container-sm overflow-hidden p-1">

<div class="container p-3">
    <div class="row">
        <div class="col"></div>
        <div class="col-sm-auto">
            <span class="address" id="address">
                <img src="images/mailbox2.svg" alt="mailbox icon">
            </span>
            <label for="address" class="col-form-label" aria-label="address" aria-describedby="address">12345
            Happiness Way, Somewhere, USA 99999</label>
        </div>
        <div class="col"></div>
    </div>

    <div class="row">
        <div class="col"></div>
        <div class="col-sm-auto">
            <span class="address-group-phone" id="phone">
                <img src="images/telephone-fill.svg" alt="telephone icon">
            </span>
            <label for="phone" class="col-form-label" aria-label="phone"
            aria-describedby="phone">123-456-7890</label>
        </div>
        <div class="col"></div>
    </div>

    <div class="row">
        <div class="col"></div>
        <div class="col-sm-auto">
            <span class="address-group-email" id="email">
                <img src="images/envelope-fill.svg" alt="email icon">
            </span>
            <label for="email" class="col-form-label" aria-label="email" aria-describedby="email">
                info@vintagetoys.com</label>
        </div>
        <div class="col"></div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-sm-auto">
            <span class="address-group-facebook" id="facebook">
                <img src="images/facebook.svg" alt="facebook icon">
            </span>
            <label for="facebook" class="col-form-label" aria-label="facebook" aria-describedby="facebook">
                facebook address
            </label>
        </div>
        <div class="col"></div>
    </div>
</div>



<div class="form-group container p-1">
<h2 class="text-center py-3">Stay in the Loop</h2>
    <form class="row mx-3">
        <div class="col-sm-6">
            <label for="name"></label>
            <input type="text" placeholder="Name" id="name" class="form-control text-secondary" required/>
        </div>
        
        <div class="col-sm-6 mb-3">
            <label for="email"></label>
            <input type="email" class="form-control text-secondary"
            id="email" placeholder="Email" aria-describedby="emailHelp" required/>
        </div>

        <div class="col-md-12">
            <label for="comments" class="form-label">Comments</label>
            <textarea class="form-control" id="comments" name="comments" rows="3" aria-label="Comments" maxlength=300></textarea>
        </div>

        <div class="col-auto mb-3">
            <small id="emailHelp" class="form-text text-muted">This form is protected by...* setup reCAPTCHA *</small>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>

</div>

</main>
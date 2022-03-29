<script>
import {
  MailIcon,
  PhoneIcon,
  // FacebookIcon,
  // TwitterIcon,
  InstagramIcon,
  // MapPinIcon
} from "vue-feather-icons";

export default {
  components: { MailIcon, PhoneIcon, InstagramIcon },
  data() {
    return {};
  },
  props: {
  enlace: String,
},
};
</script>

<template>
  <!-- Contact us start -->
  <section class="section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="fw-bold mb-4">Get in Touch</h2>
          <p class="text-muted mb-5">
            Your doubts or opinion is important for us, please do not hesitate to write us. 
            Come join us and see how we can help your business grow.
          </p>

          <div>

            <form action="https://formspree.io/f/moqrnwyb" method="POST">
            <div class="row">
              <div class="col-lg-6">
                  <div class="mb-4">
                    <label for="full-name" class="text-muted form-label">Full Name</label>
                    <input type="text" 
                    class="form-control"
                    name="name" 
                    id="full-name" 
                    placeholder="First and Last Name" 
                    required="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-4">
                    <label for="email-address" class="text-muted form-label">Email Address</label>
                    <input 
                    type="email"
                    class="form-control"
                    name="_replyto" 
                    id="email-address" 
                    placeholder="email@domain.com" 
                    required="">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-4">
                    <label for="email-subject" class="text-muted form-label">Subject</label>
                    <input 
                    type="text"
                    class="form-control"
                    name="_subject" 
                    id="email-subject" 
                    placeholder="Enter Subject.." 
                    required="">
                  </div>
                  <div class="mb-4 pb-2">
                    <label for="message" class="text-muted form-label">Message</label>
                    <textarea
                      name="message"
                      id="message"
                      rows="4"
                      class="form-control"
                      placeholder="Enter message..."
                      required=""
                    ></textarea>
                  </div>
                </div>
            </div>
            <button
              type="submit"
              id="submit"
              name="send"
              class="btn btn-primary"
            >
              Send Message
            </button>
            </form>

          </div>
        </div>
        <!-- end col -->

        <div class="col-lg-5 ms-lg-auto">
          <div class="mt-5 mt-lg-0">
            <img
              src="@/assets/images/contact.png"
              alt=""
              class="img-fluid d-block"
            />
            <p class="text-muted mt-5 mb-3">
              <mail-icon class="me-2 text-muted icon icon-xs"></mail-icon>
              info@cloudreports.com
            </p>
            <p class="text-muted mb-3">
              <phone-icon class="me-2 text-muted icon icon-xs"></phone-icon>
              829-713-1845
            </p>
            <!-- 
            <p class="text-muted mb-3">
              <map-pin-icon
                class="me-2 text-muted icon icon-xs"
              ></map-pin-icon>
              2976 Edwards Street Rocky Mount, NC 27804
            </p>
            -->
            <ul class="list-inline pt-4">
              <!-- 
                <li class="list-inline-item me-3">
                <a
                  href="javascript: void(0);"
                  class="social-icon icon-mono avatar-xs rounded-circle"
                  ><facebook-icon class="icon-xs"></facebook-icon
                ></a>
              </li>
              <li class="list-inline-item me-3">
                <a
                  href="javascript: void(0);"
                  class="social-icon icon-mono avatar-xs rounded-circle"
                  ><twitter-icon class="icon-xs"></twitter-icon
                ></a>
              </li> 
              -->
              <li class="list-inline-item">
                <a
                  href="https://www.instagram.com/pibicloud/?hl=es-la"
                  target="_blank"
                  class="social-icon icon-mono avatar-xs rounded-circle"
                  ><instagram-icon class="icon-xs"></instagram-icon
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- Contact us end -->
</template>
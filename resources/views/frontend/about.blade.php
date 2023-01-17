@extends('layouts.frontend.page')

@section('content')

<section class="about aos-init aos-animate" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img src="../asset/frontend/img/teamwork.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h3>Tri Guna Bhakti</h3>
          <p class="fst-italic">
            A web-based application with the Laravel 8 Framework that can be integrated with various android/ios mobile platforms. Tri Guna Bhakti Starter Kit aims to help companies, campuses, schools, students, freelancers, and the general public in building applications more effectively and efficiently.
          </p>
          <ul>
            <li><i class="bi bi-check2-circle"></i> Basic Blog CRUD</li>
            <li><i class="bi bi-check2-circle"></i> Gallery</li>
            <li><i class="bi bi-check2-circle"></i> Todo List</li>
            <li><i class="bi bi-check2-circle"></i> User Managemet</li>
            <li><i class="bi bi-check2-circle"></i> Open Source</li>

          </ul>
          <p>
            Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">

        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>

            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d976.3402948029031!2d112.77603243117899!3d-7.232858788670452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9b04e679e5d%3A0xf19d77eb56ef49ea!2sSekolah%20Dasar%20Tri%20Guna%20Bhakti!5e0!3m2!1sen!2sid!4v1673187178005!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 390px;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->
@endsection

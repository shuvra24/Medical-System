@extends('layouts.patient')

@section('content')
    <section class="hero" id="hero">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://plus.unsplash.com/premium_photo-1681842906523-f27efd0d1718?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="img-fluid" alt="">
                            </div>

                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="img-fluid" alt="">
                            </div>

                            <div class="carousel-item">
                                <img src="https://plus.unsplash.com/premium_photo-1673958771843-12c73b278bd0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="mb-lg-3 mb-3">About Us</h2>

                    <p>
                    <div>
                        <font color="#202124" face="arial, sans-serif"><b>Our mission declares our purpose of
                                existence as a company and our objectives.</b></font>
                    </div>
                    <div>
                        <font color="#202124" face="arial, sans-serif"><b><br></b></font>
                    </div>
                    <div>
                        <font color="#202124" face="arial, sans-serif"><b>Life Care 360 is a modern healthcare platform designed to simplify medical services for patients and doctors. We offer seamless appointment booking, lab services, and a blood donation database to ensure accessible and efficient healthcare. Our secure system allows patients to connect with experienced doctors and make hassle-free online payments. We prioritize data security, ensuring that all patient information remains confidential. Through innovative technology, we bridge the gap between healthcare providers and those in need. With Life Care 360, quality healthcare is just a click away.</b></font>
                    </div>.</p>

                </div>

                <div class="col-lg-4 col-md-5 col-12 mx-auto">
                    <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                        <p class="featured-text"><span class="featured-number">10+</span> Years<br>Experiences
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-6 ps-0">
                    <img src="/assets/images/gallery/medium-shot-man-getting-vaccine.jpg" class="img-fluid galleryImage"
                        alt="get a vaccine" title="get a vaccine for yourself">
                </div>

                <div class="col-lg-6 col-6 pe-0">
                    <img src="/assets/images/gallery/female-doctor-with-presenting-hand-gesture.jpg"
                        class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding" id="booking">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <div class="booking-form">

                        <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>

                        <form role="form" method="post" action="{{ route('appointment.booking') }}">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="Name" id="Name" class="form-control"
                                        placeholder="Full name" required='true'>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="Email" id="Email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email address" required='true'>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="telephone" name="MobileNumber" id="MobileNumber" class="form-control"
                                        placeholder="Enter Phone Number" maxlength="10">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="date" name="AppointmentDate" id="AppointmentDate" value=""
                                        class="form-control">

                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="time" name="AppointmentTime" id="AppointmentTime" value=""
                                        class="form-control">

                                </div>

                                <div class="col-lg-6 col-12">
                                    <select name="Specialization" id="Specialization" class="form-control" required>
                                        <option value="">Select specialization</option>
                                        @foreach ($Specializations as $specialization)
                                            <option value="{{ $specialization->id }}">{{ $specialization->Specialization }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <select name="Doctor" id="Doctor" class="form-control">
                                        <option value=''>Select Doctor</option>
                                    </select>
                                </div>



                                <div class="col-12">
                                    <textarea class="form-control" rows="5" id="Message" name="Message" placeholder="Additional Message"></textarea>
                                </div>

                                <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                    <button type="submit" class="form-control" name="submit" id="submit-button">Book
                                        Now</button>
                                </div>
                            </div>
                        </form>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $("#Specialization").on('change', function() {
                                    let id_specialization = $('#Specialization').val();

                                    $.ajax({
                                        type: "POST",
                                        url: "{{ route('appointment.getDoctor') }}",
                                        data: {
                                            "id_special": id_specialization,
                                            '_token': '{{ csrf_token() }}'
                                        },
                                        cache: false,

                                        success: function(msg) {
                                            $('#Doctor').html(msg);
                                        },

                                        error: function(data) {
                                            console.log('error', data);
                                        },
                                    })
                                });
                            });
                        </script>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('')}}assets/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{asset('')}}assets/assets/vendor/aos/aos.js"></script>
<script src="{{asset('')}}assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('')}}assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('')}}assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('')}}assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('')}}assets/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('')}}assets/assets/js/main.js"></script>

<script>
    const inputFile = document.querySelector("#picture__input");
    const pictureImage = document.querySelector(".picture__image");
    const pictureImageTxt = "Choose an image";
    pictureImage.innerHTML = pictureImageTxt;

    inputFile.addEventListener("change", function(e) {
        const inputTarget = e.target;
        const file = inputTarget.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener("load", function(e) {
                const readerTarget = e.target;

                const img = document.createElement("img");
                img.src = readerTarget.result;
                img.classList.add("picture__img");

                pictureImage.innerHTML = "";
                pictureImage.appendChild(img);
            });

            reader.readAsDataURL(file);
        } else {
            pictureImage.innerHTML = pictureImageTxt;
        }
    });
</script>

</body>

</html>
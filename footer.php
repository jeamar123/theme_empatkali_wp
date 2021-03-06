<footer class="footer text-white">

	<div class="bg-c-4D539C">
		<div class="flex lg:flex-row md:flex-row flex-col w-10/12 mx-auto lg:py-0 md:py-0 py-10">
			<div class="lg:w-1/2 md:w-1/2 w-full inline-flex lg:flex-row md:flex-row flex-col items-center">
				<img src="<?php echo bloginfo('template_url');?>/assets/images/empatkali-logo-all-white.png" class="h-12 lg:mr-4 md:mr-4 mr-0 lg:-mt-1 md:-mt-1 mt-0 lg:mb-0 md:mb-0 mb-1" alt="">
				<p class="font-light text-base">Aplikasi Pay Later mudah & aman</p>
			</div>

			<div class="lg:w-1/2 md:w-1/2 w-full flex lg:flex-row md:flex-row flex-col justify-end items-center lg:py-5 md:py-5 py-0 lg:mt-0 md:mt-0 mt-6">
				<a href="https://www.ojk.go.id/id/berita-dan-kegiatan/publikasi/Pages/Penyelenggara-Fintech-Terdaftar-di-OJK-per-8-April-2019.aspx" target="_blank" class="lg:mr-3 md:mr-3 mr-0">
					<img src="https://images.empatkali.co.id/ojk.png" class="h-10 lg:-mt-3 md:-mt-3 mt-0" alt="">
				</a>
				<!-- AFPI -->
				<div class="inline-flex items-center lg:mr-3 md:mr-3 mr-0 lg:mt-0 md:mt-0 mt-6 lg:mb-0 md:mb-0 mb-4">
					<img src="<?php echo bloginfo('template_url');?>/assets/images/afpi/logo.png" class="mr-1 h-10" alt="">
					<img src="<?php echo bloginfo('template_url');?>/assets/images/afpi/text-logo.png" class="lg:h-10 md:h-10 h-10" alt="">
				</div>
				<img src="<?php echo bloginfo('template_url');?>/assets/images/cbqa-kan.png" class="h-12" alt="">
			</div>
		</div>
	</div>


	<div class="bg-c-6166A8">
		<div class="flex lg:flex-row md:flex-row flex-col w-10/12 mx-auto lg:py-20 md:py-20 py-10">
			<div class="lg:w-1/3 md:w-1/3 w-full lg:mb-0 md:mb-0 mb-10 flex">
				<?php

				wp_nav_menu([
					'menu'=>'footer-menu1',
					'menu_class' => 'w-1/2 nav1',
					'container' => 'ul',
				]);

				wp_nav_menu([
					'menu'=>'footer-menu2',
					'menu_class' => 'w-1/2 nav2',
					'container' => 'ul',
				]);

				?>
			</div>
			<div class="lg:w-1/3 md:w-1/3 w-full lg:mx-5 md:mx-5 mx-0 lg:mb-0 md:mb-0 mb-10">
				<p class="text-sm mb-2">Langganan newsletter kami untuk mendapatkan informasi dan penawaran menarik</p>
				<div class="mb-4">
					<div class="mt-1 relative rounded-md shadow-sm">
						<form id="frmNewsletterSubscription">
							<input type="email" class="focus:outline-none block w-full pl-3 pr-16 sm:text-sm border-gray-300 rounded-full text-black py-2" placeholder="Masukkan email Kamu" name="email" required>
							<div class="absolute inset-y-0 right-0 flex items-center">
								<button class="text-white rounded-full bg-c-primary w-10 h-full">
									<i class="fas fa-angle-right"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
				<div class="flex text-sm">
					<label class="mr-5">Stay Connected</label>
					<ul class="flex">
						<li class="mr-3">
							<a href="https://www.instagram.com/empatkali.id" target="_blank">
								<i class="fab fa-instagram text-lg"></i>
							</a>
						</li>
						<li class="mr-3">
							<a href="https://www.facebook.com/empatkali.co.id" target="_blank">
								<i class="fab fa-facebook-f text-lg"></i>
							</a>
						</li>
						<li class="mr-3">
							<a href="https://www.youtube.com/channel/UCMBhcYeYknQv6XxxbRQsx_g?view_as=subscriber" target="_blank">
								<i class="fab fa-youtube text-lg"></i>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/empatkali_ID" target="_blank">
								<i class="fab fa-twitter text-lg"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="lg:w-1/3 md:w-1/3 w-full">
				<div class="flex justify-center items-center mb-5">
					<a href="https://apps.apple.com/us/app/empatkali/id1440454442" target="_blank" class="mr-3">
						<img src="https://images.empatkali.co.id/download-istore.png" class="w-40" alt="">
					</a>
					<a href="https://play.google.com/store/apps/details?id=id.empatkali" target="_blank">
						<img src="https://images.empatkali.co.id/download-play-store.png" class="w-40" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="copyright bg-c-primary text-white text-center py-5">
		<p class="lg:text-sm md:text-sm text-xs">Copyright &copy; 2020 <strong>PT EMPAT KALI INDONESIA</strong>. All Rights Reserved.</p>
	</div>


	<!-- Modal -->
	<!-- Customer hotline -->
	<a href="#" class="fixed bottom-0 right-0 bg-c-secondary mb-5 mr-5 lg:px-5 md:px-5 px-3 py-3 border-2 border-c-primary rounded-full flex items-center z-50" onclick="openModal(event, 'CustomerHotline')">
		<i class="far fa-question-circle text-2xl lg:mr-2 md:mr-2 mr-0"></i>
		<span class="lg:inline-block md:inline-block hidden">Customer Help</span>
	</a>
	<div class="hidden modal-customer-help flex-col fixed bottom-0 right-0 lg:mb-5 md:mb-5 mb-0 lg:mr-5 md:mr-5 mr-0 border border-c-primary bg-white rounded-lg overflow-hidden lg:w-2/6 md:w-2/6 w-full" style="z-index: 9999">
		<h4 class="bg-c-primary text-center text-xl py-3 relative">
			Customer Hotline
			<a href="#" class="close text-white text-3xl absolute right-0 top-0 pr-5 mt-1">&times;</a>
		</h4>
		<div class="px-5 py-5">
			<form id="frmCustomerHotline">
				<div class="mb-3">
					<label for="frmCustomerHotlineName" class="block text-sm font-medium text-gray-700">Name</label>
					<input type="text" name="name" id="frmCustomerHotlineName" class="mt-1 focus:outline-none block w-full shadow-sm sm:text-sm border border-c-secondary rounded-lg text-c-primary py-2 px-3" required>
				</div>
				<div class="mb-3">
					<label for="frmCustomerHotlineMobileNo" class="block text-sm font-medium text-gray-700">Mobile No.</label>
					<input type="text" name="mobile_no" id="frmCustomerHotlineMobileNo" class="mt-1 focus:outline-none block w-full shadow-sm sm:text-sm border border-c-secondary rounded-lg text-c-primary py-2 px-3" required>
				</div>
				<div class="mb-3">
					<label for="frmCustomerHotlineEMail" class="block text-sm font-medium text-gray-700">E-mail</label>
					<input type="email" name="email" id="frmCustomerHotlineEMail" class="mt-1 focus:outline-none block w-full shadow-sm sm:text-sm border border-c-secondary rounded-lg text-c-primary py-2 px-3" required>
				</div>
				<div class="mb-5">
					<label for="frmCustomerHotlineIssue" class="block text-sm font-medium text-gray-700">Issue</label>
					<textarea name="issue" id="frmCustomerHotlineIssue" rows="5" class="mt-1 focus:outline-none block w-full shadow-sm sm:text-sm border border-c-secondary rounded-lg text-c-primary py-2 px-3" required></textarea>
				</div>
				<div class="flex">
					<button type="button" class="border border-c-primary text-c-primary w-1/2 rounded-lg py-2 mr-5">Cancel</button>
					<input type="submit" class="w-1/2 bg-c-primary text-white py-2 rounded-lg cursor-pointer" value="Send">
				</div>
			</form>
		</div>
	</div>



	<div class="announcement-modal fixed top-0 left-0 flex justify-center w-full h-full" style="z-index: 9999">
		<div class="w-full max-h-screen overflow-auto">
			<div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 z-0"></div>
			<div class="border border-c-primary bg-white rounded-lg xl:w-10/12 lg:w-10/12 sm:w-10/12 w-11/12 p-10 relative mx-auto lg:mt-16 mt-5">
				<a href="#" class="close text-black text-3xl absolute right-0 top-0 pr-5 mt-1">&times;</a>
			
				<p class="text-gray-700 font-normal mb-4">Dear Sahabat EmpatKali,</p>

				<p class="text-gray-700 font-normal mb-4">Dengan berat hati kami sampaikan bahwa PT. Empat Kali Indonesia tidak lagi mendapatkan perizinan penuh untuk beroperasi di Indonesia terhitung pada tanggal 8 Mei 2021.</p>

				<p class="text-gray-700 font-normal mb-4">Kami memahami bahwa ini adalah berita mengecewakan bagi para pelanggan setia EmpatKali. Untuk itu kami sangat menghargai setiap dukungan dari sahabat Empatkali.</p>

				<p class="text-gray-700 font-normal mb-4">Kami akan tetap berkomitmen terhadap upaya investasi kami di Asia, khususnya Indonesia sebagai bagian dari rencana jangka panjang kami.</p>

				<p class="text-gray-700 font-normal mb-4">Kami akan terus bekerja sama dengan Otoritas Jasa Keuangan Indonesia untuk memahami peluang masa depan kami di kawasan ini.</p>

				<p class="text-gray-700 font-normal mb-4">Penting diingat bagi para pelanggan yang masih memiliki cicilan transaksi yang belum selesai masih harus berkewajiban secara hukum untuk menyelesaikan pembayaran atas pinjaman tersebut secara tepat waktu, termasuk biaya keterlambatan pembayaran.</p>

				<p class="text-gray-700 font-normal mb-4">Dan pihak EmpatKali masih memiliki hak untuk menghubungi para pelanggan untuk memproses segala transaksi yang belum selesai.</p>

				<p class="text-gray-700 font-normal mb-4">Terima kasih atas kepercayaan sahabat EmpatKali yang selama ini terjalin baik bersama PT. Empat Kali Indonesia.</p>

			
			</div>
		</div>
	</div>
	
</footer>


<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>

<script>
	function ready(fn) {
		if (document.readyState != 'loading'){
			fn();
		} else {
			document.addEventListener('DOMContentLoaded', fn);
		}
	}

	ready(function () {
		let frmCustomerHotline = document.getElementById('frmCustomerHotline'),
			frmNewsletterSubscription = document.getElementById('frmNewsletterSubscription');
		// Cancel
		frmCustomerHotline.querySelector('button').addEventListener('click', function (e) {
			document.querySelector('.modal-customer-help').style.display = 'none';
		});
		// x button
		document.querySelector('.modal-customer-help a.close').addEventListener('click', function (e) {
			e.preventDefault();
			document.querySelector('.modal-customer-help').style.display = 'none';
		})
		// Submit
		frmCustomerHotline.addEventListener('submit', function (e) {
			e.preventDefault();
			// let formData = new FormData( frmCustomerHotline );
			// console.log('aa', formData)
			let formData = {
				name: frmCustomerHotline.querySelector('input[name=name]').value,
				email: frmCustomerHotline.querySelector('input[name=email]').value,
				mobileNumber: frmCustomerHotline.querySelector('input[name=mobile_no]').value,
				issue: frmCustomerHotline.querySelector('textarea[name=issue]').value,
			}
			// Check mobile number existency
			fetch(`https://api.empatkali.co.id/user/api/users/check/${formData.mobileNumber}`)
				.then(response => response.json())
				.then(res => {
					if (!res.exists) {
						alert('Sorry, the mobile number you input is not registered!');
						return;
					}

					let requestBody = {
						request: {
							requester: {
								name: formData.name,
								email: formData.email
							},
							subject: 'Customer Help Line - ' + formData.mobileNumber,
							comment: {
								body: formData.issue
							}
						}
					}
					fetch('https://empatkali.zendesk.com/api/v2/requests.json', {
						method: 'POST',
						headers: {
							'Content-Type': 'application/json'
						},
						body: JSON.stringify(requestBody)
					})
					.then(response2 => response2.json())
					.then(res2 => {
						alert('Issue successfully sent!');
						document.querySelector('.modal-customer-help').style.display = 'none';
					})

				})
		});

		// Newsletter Subscription
		frmNewsletterSubscription.addEventListener('submit', function (e) {
			e.preventDefault();
			let requestBody = {
				email_address: this.querySelector('input[name=email]').value
			}

			let url = window.location.origin + '/wp-json/subscription/create';
			fetch(url, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json'
				},
				body: JSON.stringify(requestBody)
			})
			.then(response2 => response2.json())
			.then(res2 => {
				if (res2.status != 400) {
					alert('Subscribed successfully!');
					this.querySelector('input[name=email]').value = '';
				} else {
					alert('E-mail subscribed already!');
				}
			})
			.catch(err => {
				console.log('err', err)
			})
		})

		document.querySelector('.c-download a.close').addEventListener('click', function (e) {
			e.preventDefault();
			document.querySelector('.c-download').style.display = 'none';
		});


		// x button
		document.querySelector('.announcement-modal a.close').addEventListener('click', function (e) {
			e.preventDefault();
			document.querySelector('.announcement-modal').style.display = 'none';
		})

		// if(document.documentElement.clientWidth < 768){
		// 	console.log(document.documentElement.clientWidth);
		// 	document.getElementById("mob-c-dowload").innerHTML += '<img src="https://view.adjust.com/impression/1ar4n2t?label=Web_Sticky_Download_Label&engagement_type=fallback_click&redirect_android=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Did.empatkali&redirect_ios=https%3A%2F%2Fapps.apple.com%2Fus%2Fapp%2Fempatkali%2Fid1440454442" alt="">';
		// }
	});

	function openModal(evt, modalType) {
		evt.preventDefault();

		switch (modalType) {
			case 'CustomerHotline':
				let frmCustomerHotline = document.getElementById('frmCustomerHotline');
				// reset value
				frmCustomerHotline.querySelector('input[name=name]').value = '';
				frmCustomerHotline.querySelector('input[name=email]').value = '';
				frmCustomerHotline.querySelector('input[name=mobile_no]').value = '';
				frmCustomerHotline.querySelector('textarea[name=issue]').value = '';
				document.querySelector('.modal-customer-help').style.display = 'flex';
				break

			case 'CloseModalEvent':
				document.querySelector('.modal-event').style.display = 'none';
				break
		}
	}
</script>

<?php wp_footer(); ?>

</body>
</html>
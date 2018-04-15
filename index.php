<?php
include("includes/header.php");


if(isset($_POST['post'])){
	$post = new Post($con, $userLoggedIn);
	$post->submitPost($_POST['post_text'], 'none');
}
 ?>

	<!-- ADMIN notice
	Account: simon.buryan@seznam.cz Pass: Simon11 .
 -->



	<!-- SIMON REDESIGN added body part from template START -->
			<div class="fronttitle">
       <div class="jumbotron">
         <h1>Členský web</h1>
         <p class="lead">Členský web ČEZ EP s.r.o. pro sledování výsledků údržby</p>
         <p>
					<button type="button" class="btn btn-sm btn-default ukaz0">Zobraz vše</button>
				 	<button type="button" class="btn btn-sm btn-default" id="schovat">Vše schovat</button>
					</p>
				 <p>
					 <button type="button" class="btn btn-sm btn-default ukaz4">Graf A</button>
					 <button type="button" class="btn btn-sm btn-default ukaz5">Graf B</button>
					 <button type="button" class="btn btn-sm btn-default ukaz1">Tabulka A</button>
					 <button type="button" class="btn btn-sm btn-default ukaz2">Tabulka B</button>
					 <button type="button" class="btn btn-sm btn-default ukaz3">Tabulka C</button>
					 <p>
	       </div>
			 	<br>
			 </div>

			 <div class="row">

				 <script async="" src="assets/analytics.js"></script>
				 <script src="assets/chart.js"></script>

				 <div class="col-lg-6 col-md-12 graf1 polozka dataset">
					 <h4>Graf A</h4>

					 <canvas id="myChart"></canvas>

					 <script>
					 var ctx = document.getElementById("myChart");
					 var myChart = new Chart(ctx, {
							 type: 'line',
							 data: {
									 labels: ['3.12', '7.12', '11.12', '14.12', '18.12', '19.12', '20.12', '21.12', '22.12', '27.12', '28.12', '29.12', '2.1', '4.1', '5.1', '8.1', '10.1', '12.1', '15.1', '17.1', '22.1', '25.1', '26.1', '29.1', '1.2', '5.2', '8.2', '12.2', '15.2', '19.2', '22.2', '26.2', '1.3', '5.3'],
									 datasets: [{
											 label: 'PR 1',
											 data: [283, 226, 189, 181, 172, 145, 134, 146, 109, 71, 41, 27, 16, 18, 9, 10, 16, 20, 27, 32, 38, 46, 46, 67, 119, 105, 78, 56, 69, 72, 75, 66, 189, 137],
											 backgroundColor: ['#ffc7b2'],
											 borderColor: ['#ffc7b2'],
											 fill: false,
											 borderWidth: 1
									 },{
									 label: 'PR 2',
									 data: [107, 77, 76, 104, 107, 108, 97, 62, 47, 46, 28, 15, 9, 19, 17, 22, 28, 32, 49, 54, 58, 69, 68, 71, 72, 70, 53, 61, 73, 70, 74, 77, 146, 89,],
									 backgroundColor: ['#ff7c4c'],
									 borderColor: ['#ff7c4c'],
									 fill: false,
									 borderWidth: 1
									 },{
										 label: 'TU',
										 data: [203, 138, 140, 99, 94, 78, 62, 56, 51, 50, 46, 46, 152, 125, 46, 47, 47, 50, 53, 53, 58, 37, 32, 24, 126, 102, 93, 96, 41, 44, 35, 26, 133, 114,],
										 backgroundColor: ['#cc3700'],
										 borderColor: ['#cc3700'],
										 fill: false,
										 borderWidth: 1
									 }

								 ]
							 },
							 options: {
									 scales: {
											 yAxes: [{
													 ticks: {
															 beginAtZero:true
													 }
											 }]
									 }
							 }
					 });
					 </script>

						<p>Čas databáze 05.03.2018 6:00:05 - záznamů 1037</p>
					 <br><br>
					</div>


					<div class="col-lg-6 col-md-12 graf2 polozka dataset">
						<h4>Graf B</h4>

					 <canvas id="myChart2"></canvas>

					 <script>
					 var ctx2 = document.getElementById("myChart2");
					 var myChart2 = new Chart(ctx2, {
					 type: 'line',
					 data: {
							 labels: ['5.2', '8.2', '12.2', '15.2', '19.2', '22.2', '26.2', '1.3', '5.3'],
							 datasets: [{
									 label: 'PR 1',
									 data: [105, 78, 56, 69, 72, 75, 66, 189, 137],
									 backgroundColor: ['#ffc7b2'],
									 borderColor: ['#ffc7b2'],
									 fill: false,
									 borderWidth: 1
							 },{
							 label: 'PR 2',
							 data: [70, 53, 61, 73, 70, 74, 77, 146, 89],
							 backgroundColor: ['#ff7c4c'],
							 borderColor: ['#ff7c4c'],
							 fill: false,
							 borderWidth: 1
							 },{
								 label: 'TU',
								 data: [102, 93, 96, 41, 44, 35, 26, 133, 114],
								 backgroundColor: ['#cc3700'],
								 borderColor: ['#cc3700'],
								 fill: false,
								 borderWidth: 1
							 }

						 ]
					 },
					 options: {
							 scales: {
									 yAxes: [{
											 ticks: {
													 beginAtZero:true
											 }
									 }]
							 }
					 }
					 });
					 </script>

						<p>Čas databáze 05.03.2018 6:00:05 - záznamů 1037</p>
					<br><br>
					</div>


         <div class="col-xl-6 col-md-12 tab1 polozka">
					 <h4>Tabulka A</h4>
					 <p>Stav úPP</p>
					 <div class="col-sm-12 col-lg-6 dataset">
					 <h5>Tabulka A(1)</h5>
					 <table>
						 <tr>
							 <th>lok: ELE_1</th>
							 <th class=""><i class="fa fa-square fa-lg zluta"></i> Součet z červená</th>
							 <th class=""><i class="fa fa-square fa-lg cervena"></i> Součet z žlutá</th>
							 <th class=""><i class="fa fa-square fa-lg zelena"></i> Součet z zelená</th>
							 <th>Součet z bílá</th>
							 <th>Suma</th>

						 </tr>
						 <tr>
							 <td><strong>PR 1</strong></td>
							 <td>137</td>
							 <td>4</td>
							 <td>174</td>
							 <td>185</td>
							 <td>500</td>

						 </tr>
						 <tr>
							 <td><strong>PR 2</strong></td>
							 <td>89</td>
							 <td>20</td>
							 <td>76</td>
							 <td>49</td>
							 <td>234</td>

						 </tr>
						 <tr>
							 <td><strong>TU</strong></td>
							 <td>114</td>
							 <td>0</td>
							 <td>113</td>
							 <td>76</td>
							 <td>303</td>

						 </tr>
						 <tr class="tabfoot">
							 <td>Celkový součet</td>
							 <td>340</td>
							 <td>24</td>
							 <td>363</td>
							 <td>310</td>
							 <td>1037</td>

						 </tr>
					 </table>
				 </div>
				 <div class="col-sm-12 col-lg-6 polozka tab1">
					 <h5>Tabulka A(2)</h5>
					 <table>
						 <tr>
							 <th>lok: ELE_1</th>

							 <th class="headsubtab">Σ</th>
							 <th class="headsubtab">Σ dokon.</th>
							 <th class="headsubtab">Σ ZADR/UK</th>

						 </tr>
						 <tr>
							 <td><strong>PR 1</strong></td>

							 <td class="bodysubtab">137</td>
							 <td class="bodysubtab">119</td>
							 <td class="bodysubtab">86</td>
						 </tr>
						 <tr>
							 <td><strong>PR 2</strong></td>

							 <td class="bodysubtab">89</td>
							 <td class="bodysubtab">57</td>
							 <td class="bodysubtab">7</td>
						 </tr>
						 <tr>
							 <td><strong>TU</strong></td>

							 <td class="bodysubtab">114</td>
							 <td class="bodysubtab">88</td>
							 <td class="bodysubtab">24</td>
						 </tr>
						 <tr class="tabfoot">
							 <td>Celkový součet</td>

							 <td>340</td>
							 <td>264</td>
							 <td>117</td>
						 </tr>
					 </table>
				 </div>

			    <p><strong>Čas databáze: </strong>05.03.2018 6:00:05 - záznamů 1037</p>
         </div>

         <div class="col-lg-6 col-md-12 tab2 polozka dataset">
					 <h4>Tabulka B</h4>
					 <p>Stav úPP</p>
					 <table>
					   <tr>
					     <th>lok: ELE_1</th>
							 <th class=""><i class="fa fa-square fa-lg zluta"></i> Součet z červená</th>
							 <th class=""><i class="fa fa-square fa-lg cervena"></i> Součet z žlutá</th>
							 <th class=""><i class="fa fa-square fa-lg zelena"></i> Součet z zelená</th>
					     <th>Součet z bílá</th>
					     <th>Suma</th>
					   </tr>
					   <tr>
					     <td><strong>PR 1</strong></td>
					     <td>119</td>
					     <td>1</td>
					     <td>49</td>
					     <td>9</td>
					     <td>178</td>
					   </tr>
					   <tr>
					     <td><strong>PR 2</strong></td>
					     <td>57</td>
					     <td>4</td>
					     <td>13</td>
					     <td>0</td>
					     <td>74</td>
					   </tr>
					   <tr>
					     <td><strong>TU</strong></td>
					     <td>88</td>
					     <td>0</td>
					     <td>20</td>
					     <td>5</td>
					     <td>113</td>
					   </tr>
					   <tr class="tabfoot">
					     <td>Celkový součet</td>
					     <td>264</td>
					     <td>5</td>
					     <td>82</td>
					     <td>14</td>
					     <td>365</td>
					   </tr>
					 </table>
					 <br>
					 <p><strong>Čas databáze: </strong> 05.03.2018 6:00:05 - záznamů 1037</p>
         </div>

         <div class="col-lg-6 col-md-12 tab3 polozka dataset">
					 <h4>Tabulka C</h4>
					 <p>Stav PP1</p>
					 <table>
						 <tr>
							 <th>lok: ELE_1</th>
							 <th class=""><i class="fa fa-square fa-lg zluta"></i> Součet z červená</th>
							 <th class=""><i class="fa fa-square fa-lg cervena"></i> Součet z žlutá</th>
							 <th class=""><i class="fa fa-square fa-lg zelena"></i> Součet z zelená</th>
							 <th>Součet z bílá</th>
							 <th>Suma</th>
						 </tr>
						 <tr>
							 <td><strong>PR 1</strong></td>
							 <td>86</td>
							 <td>0</td>
							 <td>11</td>
							 <td>0</td>
							 <td>98</td>
						 </tr>
						 <tr>
							 <td><strong>PR 2</strong></td>
							 <td>7</td>
							 <td>0</td>
							 <td>0</td>
							 <td>0</td>
							 <td>7</td>
						 </tr>
						 <tr>
							 <td><strong>TU</strong></td>
							 <td>24</td>
							 <td>0</td>
							 <td>3</td>
							 <td>0</td>
							 <td>27</td>
						 </tr>
						 <tr class="tabfoot">
							 <td>Celkový součet</td>
							 <td>117</td>
							 <td>0</td>
							 <td>14</td>
							 <td>1</td>
							 <td>132</td>
						 </tr>
					 </table>
					 <br>
           <p><strong>Čas databáze: </strong> 05.03.2018 6:00:05 - záznamů 1037</p>
         </div>

         <div class="col-lg-6 col-md-12 dataset">
           <h3>Popiska</h3>
					 <table>
						 <tr>
							 <th class=""><i class="fa fa-square fa-lg zluta"></i> Součet z červená</th>
							 <th class=""><i class="fa fa-square fa-lg cervena"></i> Součet z žlutá</th>
							 <th class=""><i class="fa fa-square fa-lg zelena"></i> Součet z zelená</th>
						 </tr>
						 <tr>
							 <td><strong>1 den </strong>před termínem a méně</td>
							 <td><strong>Týden až 2 dny </strong>před termínem</td>
							 <td><strong>30 dní až týden</strong> před termínem</td>
						 </tr>
					 </table>
         </div>

       </div>

			 <br>

       <footer class="footer">
         <p>© 2018 Simon Buryan</p>
       </footer>

     </div> <!-- /container -->

     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script src="ie10-viewport-bug-workaround.js"></script>
		 <script src="assets/js/show.js"></script>

		 <!-- SIMON REDESIGN added body part from template FINISH -->


 </body></html>

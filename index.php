<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Cost Calculator</title>
  <meta name="description" content="">
  <meta name="author" content="aldridge" >

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references 
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">-->

  <!-- font awesome -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- CSS: implied media="all" -->
  <link rel="stylesheet" href="css/style.css?v=2">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.7.min.js"></script>

<SCRIPT LANGUAGE="JavaScript">
<!--
function checkForZero(field)
{
    if (field.value == 0 || field.value.length == 0) {
        alert ("This field can't be 0!");
        field.focus(); }
    else
        calculatePayment(field.form);
}

function cmdCalc_Click(form)
{
    if (form.T1Hardware.value == 0 || form.T1Hardware.value.length == 0) {
        alert ("The Hardware cost can't be 0!");
        form.T1Hardware.focus(); }
    else if (form.T1Software.value == 0 || form.T1Software.value.length == 0) {
        alert ("The Software cost can't be 0!");
        form.T1Software.focus(); }
    else
        calculatePayment(form);
}

function calculatePayment(form)
{	
	a=form.T1TotalHours.value;
	b=form.T1NumberOfMonths.value;
	form.T1NumberOfHours.value = a*b;
	
	c=form.T1HourlyRate.value;
	d=form.T1NumberOfHours.value;	
	form.T1ResourceCost.value = c*d;
	
	e=form.T1ResourceCost.value * 1;
	f=form.T1Hardware.value * 1;
	g=form.T1Software.value *1;
	form.T1Total.value = e+f+g;
}

function cmdCalc_Click2(form)
{
    if (form.T2Hardware.value == 0 || form.T2Hardware.value.length == 0) {
        alert ("The Hardware cost can't be 0!");
        form.T2Hardware.focus(); }
    else if (form.T2Software.value == 0 || form.T2Software.value.length == 0) {
        alert ("The Software cost can't be 0!");
        form.T2Software.focus(); }
    else
        calculatePayment2(form);
}

function calculatePayment2(form)
{	
	a=form.T2TotalHours.value;
	b=form.T2NumberOfMonths.value;
	form.T2NumberOfHours.value = a*b;
	
	c=form.T2HourlyRate.value;
	d=form.T2NumberOfHours.value;	
	form.T2ResourceCost.value = c*d;
	
	e=form.T2PagesScanned.value;
	f=form.T2BookSize.value;
	form.T2BooksScanned.value = e/f;
	
	g=form.T2BooksScanned.value;
	h=form.T2HoursScanning.value;
	i=form.T2NumberOfResources.value;
	form.T2BooksDay.value = (g*h)*i;
	
	k=form.T2BooksDay.value;
	l=form.T2NumberOfResources.value;
	m=form.T2BooksScanned.value;
	form.T2CostPerBook.value = (k*l)/m;
	
	o=form.T2ResourceCost.value * 1;
	p=form.T2Hardware.value * 1;
	q=form.T2Software.value *1;
	form.T2Total.value = o+p+q;
}

function cmdCalc_Click3(form)
{
    if (form.T3Hardware.value == 0 || form.T3Hardware.value.length == 0) {
        alert ("The Hardware cost can't be 0!");
        form.T3Hardware.focus(); }
    else if (form.T3Software.value == 0 || form.T3Software.value.length == 0) {
        alert ("The Software cost can't be 0!");
        form.T3Software.focus(); }
    else if (form.T3TotalNumberOfPages.value == 0 || form.T3TotalNumberOfPages.value.length == 0) {
        alert ("The Total Number of Pages can't be 0!");
        form.T3TotalNumberOfPages.focus(); }
    else
        calculatePayment3(form);
}

function calculatePayment3(form)
{	
	c=form.T3HourlyRateForResources.value;
	d=form.T3TotalNumberOfHours.value;	
	form.T3ResourceCost.value = c*d;
	
	a=form.T3TotalHoursPerMonth.value;
	b=form.T3NumberOfMonthsInStage.value;
	form.T3TotalNumberOfHours.value = a*b;	
	
	e=form.T3Total.value;
	f=form.T3TotalNumberOfPages.value;
	form.T3CostPerPageProcessed.value = e/f;
	
	o=form.T3ResourceCost.value * 1;
	p=form.T3Hardware.value * 1;
	q=form.T3Software.value *1;
	form.T3Total.value = o+p+q;
}

function cmdCalc_Click4(form)
{
    if (form.T4Hardware.value == 0 || form.T4Hardware.value.length == 0) {
        alert ("The Hardware cost can't be 0!");
        form.T4Hardware.focus(); }
    else if (form.T4Software.value == 0 || form.T4Software.value.length == 0) {
        alert ("The Software cost can't be 0!");
        form.T4Software.focus(); }
    else
        calculatePayment4(form);
}

function calculatePayment4(form)
{	
	c=form.T4TotalHoursPerMonth.value;
	d=form.T4NumberOfMonthsInStage.value;	
	form.T4TotalNumberOfHours.value = c*d;
	
	a=form.T4HourlyRateForResources.value;
	b=form.T4TotalNumberOfHours.value;
	form.T4ResourceCost.value = a*b;	
	
	o=form.T4ResourceCost.value * 1;
	p=form.T4Hardware.value * 1;
	q=form.T4Software.value *1;
	form.T4Total.value = o+p+q;
}

function cmdCalc_Click5(form)
{
    if (form.T3TotalNumberOfPages.value == 0 || form.T3TotalNumberOfPages.value.length == 0) {
        alert ("The Total Number of Pages in the Processing section can't be 0!");
        form.T3TotalNumberOfPages.focus(); } 
    else
        calculatePayment5(form);
}

function calculatePayment5(form)
{
	a=form.T1Total.value * 1;
	b=form.T2Total.value * 1;
	c=form.T3Total.value * 1;
	d=form.T4Total.value * 1;
	form.T14Total.value = a+b+c+d;

	e=form.T14Total.value;
	f=form.T3TotalNumberOfPages.value;
	form.T14CostPerPage.value = e/f;	
}

function CommaFormatted(amount) {
	var delimiter = ","; // replace comma if desired
	var a = amount.split('.',2)
	var d = a[1];
	var i = parseInt(a[0]);
	if(isNaN(i)) { return ''; }
	var minus = '';
	if(i < 0) { minus = '-'; }
	i = Math.abs(i);
	var n = new String(i);
	var a = [];
	while(n.length > 3) {
		var nn = n.substr(n.length-3);
		a.unshift(nn);
		n = n.substr(0,n.length-3);
	}
	if(n.length > 0) { a.unshift(n); }
	n = a.join(delimiter);
	if(d.length < 1) { amount = n; }
	else { amount = n + '.' + d; }
	amount = minus + amount;
	return amount;
}

  function show(ele) {
         var srcElement = document.getElementById(ele);
         if(srcElement != null) {
	   if(srcElement.style.display == "block") {
     		  srcElement.style.display= 'none';
   	    }
            else {
                   srcElement.style.display='block';
            }
            return false;
       }
  }  
  
//-->
</SCRIPT>
  
</head>

<body>

  <div id="container">
    <!--<header>
	<h3>Header (Cost Calculator)</h3>
    </header>-->
    <div id="main" role="main">
	<h2>Cost Calculator</h2>
	
	<h3>Gelman Project Cost Model</h3>
	
<!-- PROJECT PLANNING -->
	
<form name="costcalc">
	
	<table class="costtable" width="740px">
	<tr>
		<td class="boldcell" width="60%">Project Planning
		</td>
		<td class="boldcell" width="15%">Metrics
		</td>
		<td width="25%">&nbsp;
		</td>
	</tr>
	<tr>
		<td>Hardware Costs (Equipment, Storage, etc) <a href="" onclick="show('info-hardware'); return false;"><i class="fa fa-question-circle"></i></a>
		<div id="info-hardware" class="more-info">Equipment, Disk Storage, Hardware needed for this phase of the project.</div>
		</td>
		<td><!-- TBD -->
		<input type="number" autocorrect="off" autocapitalize="off" name="T1Hardware" value="" size="4">
		</td>
		<td> 
		</td>
	</tr>
	<tr>
		<td>Software Costs <a href="" onclick="show('info-software'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-software" class="more-info">The cost of software programs needed for this phase of the project</div>
		</td>
		<td><!-- TBD -->
		<input type="number" autocorrect="off" autocapitalize="off" name="T1Software" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Number of 'Resources <a href="" onclick="show('info-resource-number'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-resource-number" class="more-info">The total number of unique resources (or persons) used for this phase of the project.</div>
		</td>
		<td><!--23-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T1NumberOfResources" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">Total Number of Hours <a href="" onclick="show('info-hours-number'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-hours-number" class="more-info">The total number of hours worked by the resources. This is calculate by multiplying the Total Hours per Month by the Number of Months in Stage.</div>
		</td>
		<td class="boldcell"><!--8,745-->
			<input type="number" autocorrect="off" autocapitalize="off" name="T1NumberOfHours" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">'Resource' Cost <a href="" onclick="show('info-resource-cost'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-resource-cost" class="more-info">The total cost of resources for this phase of the project. This is calculated by multiplying the Hourly Rate for Resources by the Total Number of Hours.</div>
		</td>
		<td class="boldcell"><!--$309,550.09-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T1ResourceCost" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Total Hours per Month <a href="" onclick="show('info-total-hours'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-total-hours" class="more-info">The total number of hours worked by the resources each month for this phase of the project.</div>
		</td>
		<td><!--1,221-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T1TotalHours" value="" size="4">			
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Number of Months in Stage <a href="" onclick="show('info-months'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-months" class="more-info">The total number of months in this phase of the project.</div>
		</td>
		<td><!--28-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T1NumberOfMonths" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Hourly Rate for 'Resources' <a href="" onclick="show('info-resources-hourly'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-resources-hourly" class="more-info">The average hourly rate for the resources in this phase of the project.</div>
		</td>
		<td><!--$35.40-->
			<input type="number" autocorrect="off" autocapitalize="off" name="T1HourlyRate" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">Cost for Project Planning <a href="" onclick="show('info-costs-planning'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-costs-planning" class="more-info">The total cost of the project. This is a sum of the Hardware costs, Software costs, and Resource costs.</div>
		</td>
		<td class="boldcell"><!--$309,550.09-->
			<input type="number" autocorrect="off" autocapitalize="off" name="T1Total" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>		
	</table>
	
		<INPUT 
			TYPE="BUTTON"
			NAME="cmdCalc" 
			VALUE="Calculate"
			onClick=cmdCalc_Click(form)>	
	<!--</form>-->
	
	<p>&nbsp;</p>
	

<!-- SCANNING -->	
	
	<!--<form name="scanning">-->
	<table class="costtable" width="740px">
	<tr>
		<td class="boldcell" width="60%">Scanning
		</td>
		<td class="boldcell" width="15%">Metrics
		</td>
		<td width="25%">&nbsp;
		</td>
	</tr>
	<tr>
		<td>Hardware Costs (Equipment, Storage, etc) <a href="" onclick="show('info-costs-t2hardware'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-costs-t2hardware" class="more-info">Equipment, Disk Storage, Hardware needed for this phase of the project.</div>
		</td>
		<td><!--$369,084.11-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2Hardware" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Software Costs  <a href="" onclick="show('info-costs-t2software'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-costs-t2software" class="more-info">The cost of software programs needed for this phase of the project.</div>
		</td>
		<td><!-- n/a -->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2Software" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Number of 'Resources' <a href="" onclick="show('info-t2resources'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t2resources" class="more-info">The total number of unique resources (or persons) used for this phase of the project.</div>
		</td>
		<td><!--3-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2NumberOfResources" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">Total Number of Hours <a href="" onclick="show('info-t2hours'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t2hours" class="more-info">The total number of hours worked by the resources. This is calculate by multiplying the Total Hours per Month by the Number of Months in Stage.</div>
		</td>
		<td class="boldcell"><!--2,400-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2NumberOfHours" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">'Resource' Cost <a href="" onclick="show('info-costs-t2resources'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-costs-t2resources" class="more-info">The total cost of resources for this phase of the project. This is calculated by multiplying the Hourly Rate for Resources by the Total Number of Hours.</div>
		</td>
		<td class="boldcell"><!--$39,936.00-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2ResourceCost" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Total Hours per Month <a href="" onclick="show('info-total-t2hours'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-total-t2hours" class="more-info">The total number of hours worked by the resources each month for this phase of the project.</div>
		</td>
		<td><!--480.00-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2TotalHours" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Number of Months in Stage <a href="" onclick="show('info-t2months'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t2months" class="more-info">The total number of months in this phase of the project.</div>
		</td>
		<td><!--17-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2NumberOfMonths" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Hourly Rate for 'Resources' <a href="" onclick="show('info-rate-t2resources'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-rate-t2resources" class="more-info">The average hourly rate for the resources in this phase of the project.</div>
		</td>
		<td><!--$16.64-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2HourlyRate" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	
	<tr>
		<td>Number of Hours Scanning per day <a href="" onclick="show('info-hours-t2scanning'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-hours-t2scanning" class="more-info">The number of hours spent each day on scanning books. This may be based on scan production reports provided by your scanning equipment.</div>
		</td>
		<td><!--8-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2HoursScanning" value="" size="4">
		</td>
		<td>
		</td>
	</tr>	
	<tr>
		<td>Pages Scanned per Hour per Operator <a href="" onclick="show('info-t2perhour'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t2perhour" class="more-info">The number of pages scanned each hour. This may be based on scan production reports provided by your scanning equipment.</div>
		</td>
		<td><!--592.59-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2PagesScanned" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Average Book Size <a href="" onclick="show('info-t2booksize'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t2booksize" class="more-info">The average size of the scanned books. This may be based on scan production reports provided by your scanning equipment.</div>
		</td>
		<td><!--400-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2BookSize" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">Books Scanned per Hour per Operator <a href="" onclick="show('info-t2perop'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t2perop" class="more-info"> The number of books scanned each hour. This is calculated by dividing the Pages Scanned per Hour per Operator by the Average Book Size.</div>
		</td>
		<td class="boldcell"><!--1.48-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2BooksScanned" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>	
	<tr>
		<td class="boldcell">Books Scanned per Day <a href="" onclick="show('info-t2booksperday'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t2booksperday" class="more-info">The number of books scanned each day. This is calculated by multiplying the Books Scanned per Hour per Operator by the Number of Hours Scanning per Day. The resulting number is then multiplied by the Number of Resources for this phase of the project.</div>
		</td>
		<td class="boldcell"><!--35.56-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2BooksDay" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">Cost per Book scanned <a href="" onclick="show('info-t2costperbook'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t2costperbook" class="more-info">The cost of scanning each book during this phase of the project. This is calculated by multiplying Books Scanned per Day times the Number of Resources. The resulting number is then divided by Books Scanned per Hour per Operator.</div>
		</td>
		<td class="boldcell"><!--72.00-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2CostPerBook" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>
	
	<tr>
		<td class="boldcell">Total Cost of Stage <a href="" onclick="show('info-t2total'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t2total" class="more-info">The total cost of the project. This is a sum of the Hardware costs, Software costs, and Resource costs.</div>
		</td>
		<td class="boldcell"><!--$409,020.11-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T2Total" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>		
	</table>	
	
		<INPUT 
			TYPE="BUTTON"
			NAME="cmdCalc" 
			VALUE="Calculate"
			onClick=cmdCalc_Click2(form)>	
	<!--</form>-->	
	
	<p>&nbsp;</p>
	
<!-- PROCESSING -->

	<!--<form name="processing">-->
	<table class="costtable" width="740px">
	<tr>
		<td class="boldcell" width="60%">Processing
		</td>
		<td class="boldcell" width="15%">Metrics
		</td>
		<td width="25%">&nbsp;
		</td>
	</tr>
	<tr>
		<td>Hardware Costs (Equipment, Storage, etc) <a href="" onclick="show('info-t3hardware'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t3hardware" class="more-info">Equipment, Disk Storage, Hardware needed for this phase of the project.</div>
		</td>
		<td><!--$13,274.41-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T3Hardware" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Software Costs <a href="" onclick="show('info-t3software'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t3software" class="more-info">The cost of software programs needed for this phase of the project.</div>
		</td>
		<td><!--$28,350.00-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T3Software" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Number of 'Resources' <a href="" onclick="show('info-t3number-of-resources'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t3number-of-resources" class="more-info">The total number of unique resources (or persons) used for this phase of the project.</div>
		</td>
		<td><!--7-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T3NumberOfResources" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">Total Number of Hours <a href="" onclick="show('info-t3total-number-of-hours'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t3total-number-of-hours" class="more-info">The total number of hours worked by the resources. This is calculate by multiplying the Total Hours per Month by the Number of Months in Stage.</div>
		</td>
		<td class="boldcell"><!--2,984.00-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T3TotalNumberOfHours" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">'Resource' Cost <a href="" onclick="show('info-t3resource-cost'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t3resource-cost" class="more-info">The total cost of resources for this phase of the project. This is calculated by multiplying the Hourly Rate for Resources by the Total Number of Hours.</div>
		</td>
		<td class="boldcell"><!--$47,361.85-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T3ResourceCost" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Total Hours per Month <a href="" onclick="show('info-t3total-hours-per-month'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t3total-hours-per-month" class="more-info">The total number of hours worked by the resources each month for this phase of the project.</div>
		</td>
		<td><!--416.00-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T3TotalHoursPerMonth" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Number of Months in Stage <a href="" onclick="show('info-t3number-of-months-in-stage'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t3number-of-months-in-stage" class="more-info">The total number of months in this phase of the project.</div>
		</td>
		<td><!--17-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T3NumberOfMonthsInStage" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Hourly Rate for 'Resources' <a href="" onclick="show('info-t3hourly-rate-for-resources'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t3hourly-rate-for-resources" class="more-info">The average hourly rate for the resources in this phase of the project.</div>
		</td>
		<td><!--$15.87-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T3HourlyRateForResources" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Total Number of Pages <a href="" onclick="show('info-t3total-number-of-pages'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t3total-number-of-pages" class="more-info">The total number of pages processed during this phase of the project.</div>
		</td>
		<td><!--62.52-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T3TotalNumberOfPages" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<!--<tr>
		<td>Cost for Processing <a href="" onclick="show('info-t3cost-for-processing'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t3coat-for-processing" class="more-info">(?)</div>
		</td>
		<td>
		<input type="number" autocorrect="off" autocapitalize="off" name="T3CostForProcessing" value="" size="4">
		</td>
		<td>
		</td>
	</tr>	-->
	<tr>
		<td class="boldcell">Cost per Page Processed <a href="" onclick="show('info-t3cost-per-page-processed'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t3cost-per-page-processed" class="more-info">The cost to process each scanned page. This is calculated by dividing the Total Cost of the Stage by the Total Number of Pages.</div>
		</td>
		<td class="boldcell"><!--0.17-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T3CostPerPageProcessed" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">Total Cost of Stage <a href="" onclick="show('info-t3total'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-t3total" class="more-info">The total cost of the project. This is a sum of the Hardware costs, Software costs, and Resource costs.</div>
		</td>
		<td class="boldcell"><!--$75,711.85-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T3Total" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>		
	</table>	
	
		<INPUT 
			TYPE="BUTTON"
			NAME="cmdCalc" 
			VALUE="Calculate"
			onClick=cmdCalc_Click3(form)>	
	<!--</form>-->
	
	<p>&nbsp;</p>

<!-- MAKING THE COLLECTION AVAILABLE-->
	
	<!--<form name="making">-->
	<table class="costtable" width="740px;">
	<tr>
		<td class="boldcell" width="60%">Making the Collection Available
		</td>
		<td class="boldcell" width="15%">Metrics
		</td>
		<td width="25%">&nbsp;
		</td>
	</tr>
	<tr>
		<td>Hardware Costs (Equipment, Storage, etc) <a href="" onclick="show('info-hardware-costs'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-hardware-costs" class="more-info"> Equipment, Disk Storage, Hardware needed for this phase of the project.</div>
		</td>
		<td><!-- - -->
		<input type="number" autocorrect="off" autocapitalize="off" name="T4Hardware" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Software Costs <a href="" onclick="show('info-software-costs'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-software-costs" class="more-info">The cost of software programs needed for this phase of the project.</div>
		</td>
		<td><!-- TBD -->
		<input type="number" autocorrect="off" autocapitalize="off" name="T4Software" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Number of 'Resources' <a href="" onclick="show('info-number-of-resources'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-number-of-resources" class="more-info">The total number of unique resources (or persons) used for this phase of the project.</div>
		</td>
		<td><!--8-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T4NumberOfResources" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">Total Number of Hours <a href="" onclick="show('info-total-number-of-hours'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-total-number-of-hours" class="more-info">The total number of hours worked by the resources. This is calculate by multiplying the Total Hours per Month by the Number of Months in Stage.</div>
		</td>
		<td class="boldcell"><!--5,651-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T4TotalNumberOfHours" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td class="boldcell">'Resource' Cost <a href="" onclick="show('info-this-resource-cost'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-this-resource-cost" class="more-info">The total cost of resources for this phase of the project. This is calculated by multiplying the Hourly Rate for Resources by the Total Number of Hours.</div>
		</td>
		<td class="boldcell"><!--$101,748.16-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T4ResourceCost" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Total Hours per Month <a href="" onclick="show('info-total-hours-per-month'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-total-hours-per-month" class="more-info">The total number of hours worked by the resources each month for this phase of the project.</div>
		</td>
		<td><!--483.00-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T4TotalHoursPerMonth" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Number of Months in Stage <a href="" onclick="show('info-number-of-months-in-stage'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-number-of-months-in-stage" class="more-info">The total number of months in this phase of the project.</div>
		</td>
		<td><!--17-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T4NumberOfMonthsInStage" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>Hourly Rate for 'Resources' <a href="" onclick="show('info-hourly-rate-for-resources'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-hourly-rate-for-resources" class="more-info">The average hourly rate for the resources in this phase of the project.</div>
		</td>
		<td><!--$18.01-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T4HourlyRateForResources" value="" size="4">
		</td>
		<td>
		</td>
	</tr>
	
	<tr>
		<td class="boldcell">Total Cost of Stage <a href="" onclick="show('info-total-cost-of-stage'); return false;"><span class="info-blurb"><i class="fa fa-question-circle"></i></span></a>
		<div id="info-total-cost-of-stage" class="more-info"> The total cost of the project. This is a sum of the Hardware costs, Software costs, and Resource costs.</div>
		</td>
		<td class="boldcell"><!--$101,748.16-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T4Total" value="" size="4" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>		
	</table>
	
		<INPUT 
			TYPE="BUTTON"
			NAME="cmdCalc" 
			VALUE="Calculate"
			onClick=cmdCalc_Click4(form)>	
			
	<!--</form>-->	


<!-- TOTALS -->

	<p>&nbsp;</p>

	<!--<form name="totals">-->
	<table class="costtable" width="740px"> 	
	<tr>
		<td class="boldcell" width="60%">Total Cost of Project
		</td>
		<td class="boldcell" width="15%"><!--$896,030.21-->
		<input type="number" autocorrect="off" autocapitalize="off" name="T14Total" value="" size="7" readonly="readonly" class="readonly">
		</td>
		<td width="25%">&nbsp;
		</td>
	</tr>
	<tr>
		<td class="boldcell">Cost Per Page
		</td>
		<td class="boldcell"><!--$2.03-->
 		<input type="number" autocorrect="off" autocapitalize="off" name="T14CostPerPage" value="" size="7" readonly="readonly" class="readonly">
		</td>
		<td>
		</td>
	</tr>		
	</table>	
	
		<INPUT 
			TYPE="BUTTON"
			NAME="cmdCalc" 
			VALUE="Calculate"
			onClick=cmdCalc_Click5(form)>	
			
</form>	
		
    </div>
    <!--<footer>
	<h3>Footer (Cost Calculator)</h3>
    </footer>-->
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->


  <!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

</body>
</html>
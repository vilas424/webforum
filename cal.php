<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!DOCTYPE html>
<html>
<head>
<title>:Principal's daily Shedule</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link href="new.css" rel="stylesheet" type="text/css" />

<style type="text/css">

/* Stylings for the calendar display. */

#calendar {
  border-collapse: collapse;
  border-spacing: 1px;
  margin: 0px;
  padding: 0px;
}

#calendar tr.header th {
  background-color: #008080;
  color: #ffffff;
  text-align: center;
}

#calendar tr.days th {
  background-color: #80c0c0;
  width: 2.2em;
  text-align: center;
}

#calendar tr.footer td {
  border: none;
  padding: 6px 0px 4px 0px;
}

#calendar td, #calendar th {
  border: 1px solid #000000;
  color: #000000;
  empty-cells: show;
  padding: 2px .25em 2px .25em;
}

#calendar td {
  text-align: right;
}

#calendar td.weekend {
  background-color: #e0f0f0;
}

#calendar td.target {
  background-color: #ffffe0;
  font-weight: bold;
}

#calendar a, #calendar a:visited {
  color: #008080;
  text-decoration: none;
}

#calendar a:hover {
  color: #0000ff;
  text-decoration: underline;
}

#calendar a.button {
  background-color: #80c0c0;
  border: 2px solid;
  border-color: #a0e0e0 #509090 #509090 #a0e0e0;
  color: #000000;
  font-size: 80%;
  font-weight: bold;
  padding: 2px .5em 2px .5em;
  text-decoration: none;
}

#calendar a.button:visited, #calendar a.button:hover {
  color: #000000;
  text-decoration: none;
}

#calendar tr.empty
{
  visibility: hidden;
}

#calendar tr.empty td
{
  border-style: none;
}
.box
{
    position: absolute;
    left:500px;
    border: 2px;
    width: 700px;
    height: 30px;
    top :60px;
    background-color: black;
   visibility:hidden;
}

.box1
{
    position: absolute;
    left:500px;
    border: 2px outset;
    border-color: black ;
 
    width: 800px;
    height: 180px;
    top :100px;
   box-shadow: 10px 10px 5px black;
   visibility:hidden;
}

.box3
{
    position: absolute;
    left:510px;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :130px;
    visibility:hidden;
}
.box03
{
    position: absolute;
    left:510px;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :160px;
    visibility:hidden;
        border: 2px outset;
}
.box5
{
    position: absolute;
    left:580px;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :130px;
    visibility:hidden;
}
.box05
{
    position: absolute;
    left:580px;
    border: 2px outset;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :160px;
    visibility:hidden;
}
.box6
{
    position: absolute;
    left:660px;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :130px;
    visibility:hidden;
}
.box06
{
    position: absolute;
    left:660px;
        border: 2px outset;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :160px;
    visibility:hidden;
}

.box7
{
    position: absolute;
    left:740px;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :130px;
    visibility:hidden;
}
.box07
{
    position: absolute;
    left:740px;
    border: 2px outset;
    border-color: black ;
    width: 150px;
    height: 30px;
    top :160px;
    visibility:hidden;
}

.box8
{
    position: absolute;
    left:820px;
    border: 2px outset;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :150px;
    visibility:hidden;
}

.box9
{
    position: absolute;
    left:900px;
    border: 2px outset;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :150px;
    visibility:hidden;
}

.box10
{
    position: absolute;
    left:980px;
    border: 2px outset;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :150px;
    visibility:hidden;
}

.box11
{
    position: absolute;
    left:1080px;
    border: 2px outset;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :150px;
    visibility:hidden;
}

.box12
{
    position: absolute;
    left:1160px;
    border: 2px outset;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :150px;
    visibility:hidden;
}
.box13
{
    position: absolute;
    left:1240px;
    border: 2px outset;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :150px;
    visibility:hidden;
}

.box4
{
    position: absolute;
    left:510px;
    border: 2px outset;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :350px;
background-color: purple;
   visibility:hidden;
}
.box14
{
    position: absolute;
    left:650px;
    border: 2px outset;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :350px;
background-color: yellowgreen;
   visibility:hidden;
}

.box15
{
    position: absolute;
    left:790px;
    border: 2px outset;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :350px;
background-color: Tomato;
   visibility:hidden;
}

.box16
{
    position: absolute;
    left:920px;
    border: 2px outset;
    border-color: black ;
    width: 50px;
    height: 30px;
    top :350px;
background-color: Thistle;
   visibility:hidden;
}
html{
      height: 100%;
     
      -webkit-background-size: auto, cover;
      -moz-background-size: auto, cover;
      -o-background-size: auto, cover;
      background-size: auto, cover;
    }

</style>
<script type="text/javascript">
var targetDate = new Date();

// Initialize the calendar display once the page loads.

window.onload = setCalendar;

//----------------------------------------------------------------------------
// This function updates the calendar display to reflect the current target
// date.
//----------------------------------------------------------------------------

function setCalendar(event) {

  var el, tableEl, rowEl, cellEl, linkEl;
  var tmpDate, tmpDate2;
  var i, j;

  // Force a redraw by hiding the entire page.

  document.body.style.display = "none";

  // Update month name.

  el = document.getElementById("calendarHeader").firstChild;
  el.nodeValue = targetDate.getMonthName() + "\u00a0" + targetDate.getFullYear();

  // Start with the first day of the month and go back if necessary to
  // the previous Sunday.

  tmpDate = new Date(Date.parse(targetDate));
  tmpDate.setDate(1);
  while (tmpDate.getDay() != 0) {
    tmpDate.addDays(-1);
  }

  // Go through each calendar day cell in the table and update it.

  tableEl = document.getElementById("calendar");
  for (i = 2; i <= 7; i++) {
    rowEl = tableEl.rows[i];

    // Hide row if it contains no dates in the current month.

    tmpDate2 = new Date(Date.parse(tmpDate));
    tmpDate2.addDays(6);
    if (tmpDate.getMonth()  != targetDate.getMonth() &&
        tmpDate2.getMonth() != targetDate.getMonth())
      rowEl.className = "empty";
    else
      rowEl.className = "";

    // Loop through a week.

    for (j = 0; j < rowEl.cells.length; j++) {
      cellEl = rowEl.cells[j];
      linkEl = cellEl.firstChild;

      if (tmpDate.getMonth() == targetDate.getMonth()) {
        linkEl.date = new Date(Date.parse(tmpDate));
        s = tmpDate.toString().split(" ");
        linkEl.title = s[0] + " " + s[1] + " " + s[2] + ", " + s[s.length - 1];
        linkEl.firstChild.nodeValue = tmpDate.getDate();
        linkEl.style.visibility = "";
      }
      else
        linkEl.style.visibility = "hidden";

      // Highlight the current date.

      if (cellEl.oldClass == null)
        cellEl.oldClass = cellEl.className;
      if (Date.parse(tmpDate) == Date.parse(targetDate))
        cellEl.className = cellEl.oldClass + " target";
      else
        cellEl.className = cellEl.oldClass;

      // Go to the next day.

      tmpDate.addDays(1);
    }
  }

  // Restore the page display.

  document.body.style.display = "";
}

//----------------------------------------------------------------------------
// Event handlers for the calendar elements.
//----------------------------------------------------------------------------

function addMonths(event, n) {

  // Advance the calendar month and update the display.

  targetDate.addMonths(n);
  setCalendar(event);
}

function addYears(event, n) {

  // Advance the calendar year and update the display.

  targetDate.addYears(n);
  setCalendar(event);
}

function setTargetDate(event, link) {

  // Change the target date and update the calendar.

  if (link.date != null) {
    targetDate = new Date(Date.parse(link.date));
    setCalendar(event);
    displayDate(targetDate);
  }
}

function displayDate(event) {

  // Display the current target date as a formatted string.

  alert(formatDate(targetDate));
  targetDate=formatDate(targetDate);
  makefunction();
}

function formatDate() {

  var mm, dd, yyyy;

  // Return the target date in "mm/dd/yyyy" format.

  mm = String(targetDate.getMonth() + 1);
  while (mm.length < 2)
    mm = "0" + mm;
  dd = String(targetDate.getDate());
  while (dd.length < 2)
    dd = "0" + dd;
  yyyy = String(targetDate.getFullYear());
  while (yyyy.length < 4)
    yyyy = "0" + yyyy;

  return mm + "/" + dd + "/" + yyyy;
}

//============================================================================
// Add new properties and methods to the Date object.
//============================================================================

// Properties

Date.prototype.monthNames = new Array("January", "February", "March", "April",
  "May", "June", "July", "August", "September", "October", "November",
  "December");
Date.prototype.savedDate  = null;

// Methods

Date.prototype.getMonthName = dateGetMonthName;
Date.prototype.getDays      = dateGetDays;
Date.prototype.addDays      = dateAddDays;
Date.prototype.addMonths    = dateAddMonths;
Date.prototype.addYears     = dateAddYears;

//----------------------------------------------------------------------------
// getMonthName(): Returns the name of the date's month.
//----------------------------------------------------------------------------

function dateGetMonthName() {

  return this.monthNames[this.getMonth()];
}

//----------------------------------------------------------------------------
// getDays(): Returns the number of days in the date's month.
//----------------------------------------------------------------------------

function dateGetDays() {

  var tmpDate, d, m;

  tmpDate = new Date(Date.parse(this));
  m = tmpDate.getMonth();
  d = 28;
  do {
    d++;
    tmpDate.setDate(d);
  } while (tmpDate.getMonth() == m);

  return d - 1;
}

//----------------------------------------------------------------------------
// addDays(n): Adds the specified number of days to the date.
//----------------------------------------------------------------------------

function dateAddDays(n) {

  // Add the specified number of days.

  this.setDate(this.getDate() + n);

  // Reset the new day of month.

  this.savedDate = this.getDate();
}

//----------------------------------------------------------------------------
// addMonths(n): Adds the specified number of months to the date, adjusting
// the day of the month if necessary.
//----------------------------------------------------------------------------

function dateAddMonths(n) {

  // Save the day of month if not already set.

  if (this.savedDate == null)
    this.savedDate = this.getDate();

  // Set the day of month to the first to avoid rolling.

  this.setDate(1);

  // Add the specified number of months.

  this.setMonth(this.getMonth() + n);

  // Restore the saved day of month, if possible.

  this.setDate(Math.min(this.savedDate, this.getDays()));
}

//----------------------------------------------------------------------------
// addYears(n): Adds the specified number of years to the date, adjusting the
// day of the month for leap years.
//----------------------------------------------------------------------------

function dateAddYears(n) {

  // Save the day of month if not already set.

  if (this.savedDate == null)
    this.savedDate = this.getDate();

  // Set the day of month to the first to avoid rolling.

  this.setDate(1);

  // Add the specified number of years.

  this.setFullYear(this.getFullYear() + n);

  // Restore the saved day of month, if possible.

  this.setDate(Math.min(this.savedDate, this.getDays()));
}


function makefunction()
{
 document.getElementById("d1").style.visibility="visible";
    document.getElementById("d2").style.visibility="visible";
       var xmlhttp;
       if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
        var response_text = xmlhttp.responseText;
        response_text = response_text.substring(0, response_text.length - 1);//
        //alert(response_text);
       arr=response_text.split(' ');
     
          document.getElementById("d3").style.visibility="visible";
          document.getElementById("d03").style.visibility="visible";
                document.getElementById("d5").style.visibility="visible";
          document.getElementById("d05").style.visibility="visible";

          document.getElementById("d6").style.visibility="visible";
          document.getElementById("d06").style.visibility="visible";
            document.getElementById("d7").style.visibility="visible";
          document.getElementById("d07").style.visibility="visible";
          if(arr[1]!='8')
          document.getElementById("t1").value=8+" "+arr[1]+" "+arr[3];
             document.getElementById("d03").style.backgroundColor = 'yellowgreen';
            

              document.getElementById("t2").value= "11:30am";
             document.getElementById("d05").style.backgroundColor = 'tomato';

              document.getElementById("t3").value="11:30-12pm";
                document.getElementById("d06").style.backgroundColor = 'yellowgreen';

                  document.getElementById("t4").value="12:5pm";
                document.getElementById("d07").style.backgroundColor = 'tomato';

                document.getElementById("b1").style.visibility="visible";
                   document.getElementById("d16").style.visibility="visible";
      document.getElementById("d15").style.visibility="visible";
      document.getElementById("d15").style.backgroundColor = 'yellowgreen';
      document.getElementById("d16").style.backgroundColor = 'tomato';

              // document.getElementById("t2").value="2"+"_"+"2:30pm";
             //document.getElementById("d05").style.backgroundColor = 'yellowgreen';
 
           
 /*if(res=="pending")
      {
          document.getElementById("d10").style.backgroundColor = 'yellowgreen';
      } */
    }
    /* document.getElementById("d9").style.backgroundColor = 'Thistle';
     document.getElementById("d10").style.backgroundColor = 'Thistle';
      document.getElementById("d6").style.backgroundColor = 'Tomato';
        document.getElementById("d7").style.backgroundColor = 'yellowgreen';
         document.getElementById("d5").style.backgroundColor = 'yellowgreen'; document.getElementById("d3").style.backgroundColor = 'yellowgreen';
         document.getElementById("d12").style.backgroundColor = 'Tomato'; document.getElementById("d11").style.backgroundColor = 'purple';
         document.getElementById("d8").style.backgroundColor = 'purple'; document.getElementById("d13").style.backgroundColor = 'yellowgreen'; */

  } 
xmlhttp.open("GET","connect.php?q="+targetDate,true);
xmlhttp.send(); 

    
    /*document.getElementById("d3").style.visibility="visible";
    document.getElementById("d5").style.visibility="visible";
    document.getElementById("d6").style.visibility="visible";
     document.getElementById("d7").style.visibility="visible";
        document.getElementById("d8").style.visibility="visible";
           document.getElementById("d9").style.visibility="visible";
             
              document.getElementById("d11").style.visibility="visible";
               document.getElementById("d12").style.visibility="visible";
                document.getElementById("d13").style.visibility="visible";

     document.getElementById("d4").style.visibility="visible";

     document.getElementById("d15").style.visibility="visible";
     document.getElementById("d16").style.visibility="visible";
      document.getElementById("d17").style.visibility="visible";
            document.getElementById("b1").style.visibility="visible"; */

}

function login()
{
   window.location.assign("login.html");
}

//]]></script>
</head>
<body>

<div id="demoBox">

    <h1>Schedule availability</h1>

</div>

<p></p>

<table id="calendar">
<tr class="header">
  <th id="calendarHeader" colspan="7">&nbsp;</th>
</tr>
<tr class="days">
  <th>Sun</th>
  <th>Mon</th>
  <th>Tue</th>
  <th>Wed</th>
  <th>Thu</th>
  <th>Fri</th>
  <th>Sat</th>
</tr>
<tr>
  <td class="weekend"><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td class="weekend"><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
</tr>
<tr>
  <td class="weekend"><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td class="weekend"><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
</tr>
<tr>
  <td class="weekend"><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td class="weekend"><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
</tr>
<tr>
  <td class="weekend"><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td class="weekend"><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
</tr>
<tr>
  <td class="weekend"><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td class="weekend"><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
</tr>
<tr>
  <td class="weekend"><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
  <td class="weekend"><a href="" onclick="setTargetDate(event, this); return false;">&nbsp;</a></td>
</tr>
<tr class="footer">
  <td colspan="2" style="text-align:left;">
    <a class="button" href="" title="Previous year."
     onclick="addYears(event, -1); return false;">&lt;&lt;</a>
    <a class="button" href="" title="Previous month."
     onclick="addMonths(event, -1); return false;">&lt;</a>
  </td>
  <td colspan="3" style="text-align:center;">
    <a class="button" href="" title="Use the highlighted date."
     onclick="displayDate(event); return false;">Select</a>
    <a class="button" href="" title="Reset calendar to current date."
     onclick="targetDate = new Date(); setCalendar(event); return false;">Reset</a>
  </td>
  <td colspan="2" style="text-align:right;">
    <a class="button" href="" title="Next month."
     onclick="addMonths(event, 1); return false;">&gt;</a>
    <a class="button" href="" title="Next year."
     onclick="addYears(event, 1); return false;">&gt;&gt;</a>
  </td>
</tr>
</table>
<div class="box" id="d1"> <pre id="p1">          <font color="white">          Thursday  16-05-2013</font> </pre></div>
<div class="box1" id="d2"> <pre id="p1"> <strong em="1">  </strong>              </pre></div>
<div class="box3" id="d3"> <input type="text" id="t1" style="position:absolute;width:79px;border:0"/></div>
<div class="box03" id="d03"> <p id="p1"> </p></div>
<div class="box5" id="d5"> <input type="text" id="t2" style="position:absolute;width:89px;border:0"/></div>
<div class="box05" id="d05"> <p id="p1"> </p></div>
<div class="box6" id="d6"> <input type="text" id="t3" style="position:absolute;width:89px;border:0"/></div>
<div class="box06" id="d06"> <p id="p1"> </p></div>


<div class="box7" id="d7"><input type="text" id="t4" style="position:absolute;width:89px;border:0"/> </div>
<div class="box07" id="d07"> <p id="p1"> </p></div>
<div class="box8" id="d8"> <p id="p1"> </p></div>
<div class="box9" id="d9"> <p id="p1"> </p></div>
<div class="box10" id="d10"> <p id="p1"> </p></div>
<div class="box11" id="d11"> <p id="p1"> </p></div>
<div class="box12" id="d12"> <p id="p1"> </p></div>
<div class="box13" id="d13"> <p id="p1"> </p></div>
<div class="box4" id="d4">    <pre id="p2">  <font size="2pt">     Appointment </font> </pre></div>
<div class="box14" id="d15"> <pre id="p3">       Available </pre></div>
<div class="box15" id="d16"> <pre id="p4">       Busy </pre></div>
<div class="box16" id="d17"> <pre id="p5">       Lunch  </pre></div>
<input type="button" id="b1" value="Make Appointment" style="position: absolute;left:650px;top:450px;width:150px;visibility: hidden" onclick="login()"></input>
</body>
</html>


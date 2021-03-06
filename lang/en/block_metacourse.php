<?php

/* TRANSLATABLE */

$string['deleted_all_courses_error'] = 'You attempted to save a metacourse with no dates attached. Please go back and make sure that at least one date is added to the course.';

$string['pluginname'] = 'Metacourse';
$string['modulename'] = 'Metacourse';
$string['name'] = 'Metacourse';
$string['contentheader'] = 'Metacourse Settings';
$string['modulenameplural'] = 'Courses';
$string['metacourse:view'] = 'View the block';
$string['metacourse:addinstance'] = 'Add the block on the My page';
$string['none'] = 'none';
$string['coursesavailable'] = 'Course menu';
$string['instructors'] = 'Instructors'; 
$string['coursedates'] = 'Course dates'; 
$string['location'] = 'Location';
$string['action'] = 'Action';
$string['signup'] = 'Sign up'; 
$string['signupwait'] = 'Sign up for<br>waiting list'; 
$string['promote'] = 'Sign up from waiting list'; 
$string['enrolme'] = 'Sign me up'; 
$string['enrolOthers'] = 'Sign others up'; 
$string['enrolOthers-wait'] = 'Sign others up for waiting list'; 
$string['unenrolme'] = 'Confirm'; 
$string['unenrolmebutton'] = 'Cancel my signup'; 
$string['customemail'] = 'Custom email'; 
$string['competence'] = 'Competence'; 
$string['listofcourses'] = "List of all courses";
$string['coursesfor'] = "Courses for";
$string['countries'] = "Countries";
$string['published'] = 'Published';

$string['print'] = 'Print'; 

// need translation

$string['purpose'] = 'Purpose';
$string['languages'] = 'Languages';
$string['target'] = 'Target';
$string['target_description'] = "Target description";
$string['content'] = 'Content'; 
$string['comment'] = 'Comment'; 
$string['duration'] = 'Duration'; 
$string['cancellation'] = 'Cancellation'; 
$string['coordinator'] = 'Coordinator'; 
$string['lodging'] = 'Course Location & Lodging'; 
$string['provider'] = 'Provider'; 
$string['contact'] = 'Course Owner'; 
$string['multipledates'] = 'Multiple dates'; 
$string['nrviews'] = 'Views'; 
$string['viewcourse'] = 'View course'; 
$string['courseend'] = 'End'; 
$string['coursestart'] = 'Start'; 
$string['price'] = 'Price';
$string['currency'] = 'Currency';
$string['availableseats'] = 'Seats'; 
$string['nrparticipants'] = 'Enrolled'; 
$string['coursedates'] = 'Course dates';
$string['youareenrolled'] = 'You are enrolled'; 
$string['expiredenrolment'] = 'Enrolment ended'; 
$string['addtowaitinglist'] = 'Sign me up on the waiting list';
$string['enrol_meta_wait_list_explain'] = 'There are no dates planned for this course at the moment. If you are interested in participating in the course, then please sign up for the waiting list.
When a date has been scheduled, you will automatically be signed up for the course and receive an e-mail confirming this.

';
//$string['enrol_waitinglist_title'] = 'Waiting list terms title';
//$string['enrol_waitinglist_contents'] = 'Waiting list terms contents';
//$string['enrol_waitinglist_tos'] = 'Waiting list TOS';
$string['enrol_waitinglist_title'] = 'Waiting list sign up';
$string['enrol_waitinglist_contents'] = 'Registration requires an accept from your manager. Please tick the box below to confirm that you have this accept.

You are signing up for a waiting list, and you will automatically be contacted if a seat becomes available.';
$string['enrol_waitinglist_tos'] = 'I have an accept';
$string['enrol_meta_waitinglist_title'] = 'Waiting list sign up';
$string['enrol_meta_waitinglist_contents'] = 'Registration requires an accept from your manager. Please tick the box below to confirm that you have this accept.

You are signing up for a waiting list, when a date has been scheduled, you will automatically be signed up for the course and receive an e-mail confirming this.';
$string['enrol_meta_waitinglist_tos'] = 'I have an accept';
$string['unpublish_date'] = 'Unpublish date';

$string['tostitle'] = 'Terms of agreement'; 
$string['tosaccept'] = 'I accept the terms of agreement'; 
$string['cancellationaccept'] = 'If cancelling later than 5 weeks prior to the course your department will be charged the full amount.'; 
$string['agreecancel'] = 'I agree to the cancellation policy.'; 
$string['tosacceptwait'] = 'and I have acknowledged that I will be enrolled as soon as there is an available seat'; 
$string['toscontent'] = 'Registration requires an accept from you manager. Please tick the box below to confirm that you have this accept. 

Cancellation
Please read the terms of cancellation for the specific course before signing up.

Payments
Course fees will be charged you department immediately after the course.
'; 
//Enrolment email
$string['emailconf'] = '
Dear {$a->firstname} {$a->lastname},
 
We hereby confirm that you have been signed up for:
Title: {$a->course}
Dates: {$a->periodfrom} - {$a->periodto}
Price: {$a->currency} {$a->price} - If no amount is stated there is no fee. (Except for language courses in Danish)
Location: {$a->location}

Billing information:
Billing department: {$a->department}

Further information will follow before the course. 

Please note that you are responsible for for adding the event to your calendar; however, to make things easier, you can use the attached link to automate the process. 

Payment:
If any course fee the amount will be debit your department immediately after the course. 

Cancellation
Please see the cancellation policy in the course description. 

To cancel your participation please follow the link to {$a->myhome}

Best regards
{$a->coordinator}
';

$string['emailelearnconf'] = '
Dear {$a->firstname} {$a->lastname},
 
We hereby confirm that you have been signed up for the e-Learning:
Title: {$a->course}

To cancel your participation please follow the link to {$a->myhome}

Best regards
{$a->coordinator}
';

//Enrolment email
$string['emailwait'] = '
Dear {$a->firstname} {$a->lastname},
 
We hereby confirm that you have been added to a waiting list.

Title: {$a->course}
Dates: {$a->periodfrom} - {$a->periodto}

When a seat becomes available you will automatically be signed up for the course and you will receive an email confirming this.

Best regards
{$a->coordinator}
';

$string['emailmetawait'] = '
Dear {$a->firstname} {$a->lastname},
 
We hereby confirm that you have been added to a waiting list.

Title: {$a->course}

When a date has been scheduled, you will automatically be signed up for the course and receive an e-mail confirming this.

Best regards
{$a->coordinator}
';

//Cancellation Email
$string['emailunenrolconf'] = '
Dear {$a->firstname} {$a->lastname},
 
We have recieved your cancellation for:
Title: {$a->course}
Dates: {$a->periodfrom} - {$a->periodto}
Price: {$a->currency} {$a->price} - If no amount is stated there is no fee. (Except for language courses in Danish)

If your cancellation exceeds the cancellation deadline your department will be required to pay the full course feed. The cancellation policy can be seen in the course description. 

Best regards
{$a->coordinator}
';

$string['emailunenrolelearnconf'] = '
Dear {$a->firstname} {$a->lastname},
 
We have recieved your cancellation for the e-Learning:
Title: {$a->course}

Best regards
{$a->coordinator}
';

$string['emailunenrolwaitconf'] = '
Dear {$a->firstname} {$a->lastname},

We have received your cancellation from the waiting list for:
Title: {$a->course}
Dates: {$a->periodfrom} - {$a->periodto}
Price: {$a->currency} {$a->price} - If no amount is stated there is no fee. (Except for language courses in Danish)

Best regards
{$a->coordinator}
';
$string['emailunenrolmetawaitconf'] = '
Dear {$a->firstname} {$a->lastname},

We have received your cancellation from the waiting list for:
Title: {$a->course}

Best regards
{$a->coordinator}
';

// help buttons
$string["name"] = "Name";
$string["meta_name"] = "The name of the course must be in English";
$string["meta_name_help"] = "The name of the course must be in English";
$string["localname"] = "Local name";
$string["localname_help"] = "Title in a different language that will be displayed only to the users using the specified language";
$string["localname_lang"] = "Local language";
$string["localname_lang_help"] = "The language for which the local title should be displayed";
$string["purpose_help"] = "The purpose of the course";
$string["target_help"] = "The target of the course";
$string["target_description_help"] = "The description of the target group of the course";
$string["content_help"] = "The content of the course";
$string["comment_help"] = "Any comments for the course?";
$string["instructors_help"] = "Who will be the instructor of the course?";
$string["cancellation_help"] = "What happens if a user cancels a course";
$string['multipledates_help'] = 'Will your course be held on multiple dates?'; 
$string['customemail_help'] = 'Do you want the user to receive a custom "Welcome email" when they get enrolled into a course?'; 
$string['unpublishdate'] = 'Unpublish date'; 
$string['unpublishdate_help'] = 'When do you want the course not to be shown to student anymore?'; 

$string['nodates_enabled'] = 'No dates';
$string['nodates_enabled_help'] = 'When selected users can enrol meta course before any date course has been planned. When sufficient participants have enroled a date course can be scheduled, and participants can be enrolled to the date course from the meta course waiting list.';

$string['timezone'] = 'Timezone?';
$string['timezone_help'] = 'The timezone for the place where the course is held. Remember to account for daylight saving time (DST). For example if the course is held in Denmark (timezone = +1), and DST is active, you have to select +2, since DST adds one hour.';

$string['timezonename'] = 'Timezone?';
$string['timezonename_help'] = 'The timezone for the place where the course is held. This is automatically set when the location is selected unless no time zone has been specified for the location.';

$string['elearning'] = 'Elearning';
$string['elearning_help'] = 'Elearning courses are course which the student attends wholly online - they do not have an attached date, since users can access them at any time.';

$string['date_course_realunpublishdate'] = 'Unpublish date';
$string['date_course_realunpublishdate_help'] = 'Not mandatory. When used, the course will not be visible after the specified date/time.';

$string['manual_enrol'] = 'Manual enrolment';
$string['manual_enrol_help'] = 'When selected automatic enrolment is not enabled from the waiting list. Instead the coordinater should enrol from the waiting list.';

$string['goto_course'] = 'Go to E-learning course';
$string['elearning_course'] = 'E-learning course';

$string['no_limit'] = 'No limit';

$string['course_details_updated_subject'] = 'Course details updated for the course {$a}';
$string['course_details_updated_body'] = '
Dear {$a->firstname} {$a->lastname},

Please notice, that the {$a->changes_summary} for the course {$a->coursename} has been updated. {$a->changes}

Your Outlook invite has automatically been updated, so no actions are required from you. This e-mail was just to inform you about the changes.
If you have any questions, please let me know.

Best regards,
{$a->coordinator}';

$string['course_details_updated_location'] = 'the location has changed from {$a->old} to {$a->new}';
$string['course_details_updated_time'] = 'the {$a->name} has been changed from {$a->old} to {$a->new}';

$string['startdate'] = 'start time';
$string['enddate'] = 'end time';

$string['error_full_booked'] = 'The course is full booked. User could not be enrolled.';

$string['meta_coodinator_required'] = 'Required when enrolment to meta course waiting list is selected';
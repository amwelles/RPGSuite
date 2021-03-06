<?php
/** THESE LIKELY CHANGE SITE BY SITE **/
class Fields {
  const GENDER = 'fid6';
  const BDATE = 'fid9';
  const AGE = 'fid8';     //Age is a backup in case birthdate is invalid date
  const GROUPPOINTS = 'fidx';
  const TYPE = 'fid38';   // Determines account type for default group on register/approval
}

class Groups {
  const WAITING = 5;
  const MEMBER = 2;
  const ADMIN = 4;
  const MOD = 6;
  const IC_DEFAULT = 8;
  const WILDFAUNA = 9;
  const LURKER = 32;
  const ADOPTABLE = 11;
}

class Accounts {
  const ADMIN = 1;
}

class Forums {
  const STAFFCATEGORY = 79;
}

class Stats {
  const YOUTHCAP = 6;
  const ADULTCAP = 12;
  const ADULTAGE = 9; // 9 months
  const PERCENTAGE = 2/3; // percentage where color changes!
}

class PointChance {
  const WINTER = 50;          // 50%
  const FALL = 35;            // 35%
  const SPRINGSUMMER = 20;    // 20%
}



/** THESE LIKELY WON'T CHANGE **/

class Creation {

  /**
  IC Forum Settings
  //Need set: name, description, parentlist, rulestitle, rules
  */
  const IC_FORUM = array(
    'type' => 'f',
    'active' => 1,
    'open' => 1,
    'allowhtml' => 0,
    'allowmycode' => 1,
    'allowsmilies' => 1,
    'allowimgcode' => 1,
    'allowvideocode' => 1,
    'allowpicons' => 1,
    'allowtratings' => 0,
    'usepostcounts' => 1,
    'usethreadcounts' => 1,
    'requireprefix' => 1,
    'showinjump' => 1,
    'style' => 0,
    'overridestyle' => 0,
    'rulestype' => 1,
    'icforum' => 1
  );
  /**
  OOC (Members Only) Forum Settings
  //Need set: name, description, parentlist
  */
  const OOC_FORUM = array(
    'type' => 'f',
    'active' => 1,
    'open' => 1,
    'allowhtml' => 0,
    'allowmycode' => 1,
    'allowsmilies' => 1,
    'allowimgcode' => 1,
    'allowvideocode' => 1,
    'allowpicons' => 0,
    'allowtratings' => 0,
    'usepostcounts' => 0,
    'usethreadcounts' => 0,
    'requireprefix' => 0,
    'showinjump' => 1,
    'style' => 0,
    'overridestyle' => 0,
    'rulestype' => 1,
    'icforum' => 0
  );

  /**
  Read/Write Permissions (Member in MO forum)
  //Need set: fid, gid
  */
  const FORUM_PERM_READWRITE = array(
    'canview' => 1,
    'canviewthreads' => 1,
    'canonlyviewownthreads' => 0,
    'candlattachments' => 1,
    'canpostthreads' => 1,
    'canpostreplys' => 1,
    'canonlyreplyownthreads' => 0,
    'canpostattachments' => 1,
    'canratethreads' => 0,
    'caneditposts' => 1,
    'candeleteposts' => 1,
    'candeletethreads' => 1,
    'caneditattachments' => 1,
    'modposts' => 0,
    'modthreads' => 0,
    'mod_edit_posts' => 0,
    'modattachments' => 0,
    'canpostpolls' => 0,
    'canvotepolls' => 0,
    'cansearch' => 1
  );
  /**
  No Read Permissions (Non-Member in MO forum)
  //Need set: fid, gid
  */
  const FORUM_PERM_NOREAD = array(
    'canview' => 0,
    'canviewthreads' => 0,
    'canonlyviewownthreads' => 0,
    'candlattachments' => 0,
    'canpostthreads' => 0,
    'canpostreplys' => 0,
    'canonlyreplyownthreads' => 0,
    'canpostattachments' => 0,
    'canratethreads' => 0,
    'caneditposts' => 0,
    'candeleteposts' => 0,
    'candeletethreads' => 0,
    'caneditattachments' => 0,
    'modposts' => 0,
    'modthreads' => 0,
    'mod_edit_posts' => 0,
    'modattachments' => 0,
    'canpostpolls' => 0,
    'canvotepolls' => 0,
    'cansearch' => 0
  );

  /**
  Usergroup base permissions
  //Need set: title, description, namestyle, image
  */
  const USERGROUP = array(
    'type' => 4,
    'stars' => 0,
    'disporder' => 0,
    'isbannedgroup' => 0,
    'canview' => 1,
    'canviewthreads' => 1,
    'canviewprofiles' => 1,
    'candlattachments' => 0,
    'canviewboardclosed' => 0,
    'canpostthreads' => 1,
    'canpostreplys' => 1,
    'canpostattachments' => 0,
    'canratethreads' => 0,
    'modposts' => 0,
    'modthreads' => 0,
    'mod_edit_posts' => 0,
    'modattachments' => 0,
    'caneditposts' => 1,
    'candeleteposts' => 0,
    'candeletethreads' => 0,
    'caneditattachments' => 0,
    'canpostpolls' => 0,
    'canvotepolls' => 1,
    'canundovotes' => 0,
    'canusepms' => 1,
    'cansendpms' => 1,
    'cantrackpms' => 1,
    'candenypmreceipts' => 1,
    'pmquota' => 100,
    'maxpmrecipients' => 12,
    'cansendemail' => 1,
    'cansendemailoverride' => 0,
    'maxemails' => 4,
    'emailfloodtime' => 5,
    'canviewmemberlist' => 1,
    'canviewcalendar' => 1,
    'canaddevents' => 1,
    'canbypasseventmod' => 0,
    'canmoderateevents' => 0,
    'canviewonline' => 1,
    'canviewwolinvis' => 0,
    'canviewonlineips' => 0,
    'cancp' => 0,
    'issupermod' => 0,
    'cansearch' => 1,
    'canusercp' => 1,
    'canuploadavatars' => 1,
    'canratemembers' => 1,
    'canchangename' => 0,
    'canbereported' => 1,
    'canchangewebsite' => 1,
    'showforumteam' => 0,
    'usereputationsystem' => 1,
    'cangivereputations' => 0,
    'candeletereputations' => 0,
    'reputationpower' => 10,
    'maxreputationsday' => 5,
    'maxreputationsperuser' => 0,
    'maxreputationsperthread' => 5,
    'candisplaygroup' => 1,
    'attachquota' => 5000,
    'cancustomtitle' => 1,
    'canwarnusers' => 0,
    'canreceivewarnings' => 1,
    'maxwarningsday' => 0,
    'canmodcp' => 0,
    'showinbirthdaylist' => 0,
    'canoverridepm' => 0,
    'canusesig' => 1,
    'canusesigxposts' => 0,
    'signofollow' => 0,
    'as_canswitch' => 1,
    'as_limit' => 0,
    'edittimelimit' => 0,
    'maxposts' => 0,
    'showmemberlist' => 1,
    'canmanageannounce' => 0,
    'canmanagemodqueue' => 0,
    'canmanagereportedcontent' => 0,
    'canviewmodlogs' => 0,
    'caneditprofiles' => 0,
    'canbanusers' => 0,
    'canviewwarnlogs' => 0,
    'canuseipsearch' => 0,
    'icgroup' => 1
  );

  /**
  IC Group base extras
  //Need set: gid, fid, subforums
  */
  const ICGROUP = array(
    'activitycheck' => 1,
    'grouppoints' => 1,
    'hasranks' => 1,
    'activityperiod' => 7,
    'defaultrank' => 0
  );

  /**
  Group leader Permissions
  //Needs set: gid, uid
  */
  const GROUPLEADER = array(
    'canmanagemembers' => 1,
    'canmanagerequests' => 1,
    'caninvitemembers' => 0
  );

  /**
  IC Moderator Permissions (Group Leaders in their group forums)
  //Needs set: fid, id
  */
  const MODERATOR = array(
    'isgroup' => 0,
    'caneditposts' => 1,
    'cansoftdeleteposts' => 1,
    'canrestoreposts' => 1,
    'candeleteposts' => 1,
    'cansoftdeletethreads' => 1,
    'canrestorethreads' => 1,
    'candeletethreads' => 1,
    'canviewips' => 0,
    'canviewunapprove' => 0,
    'canviewdeleted' => 1,
    'canopenclosethreads' => 0,
    'canstickunstickthreads' => 1,
    'canapproveunapprovethreads' => 0,
    'canapproveunapproveposts' => 0,
    'canapproveunapproveattachs' => 0,
    'canmanagethreads' => 1,
    'canmanagepolls' => 1,
    'canpostclosedthreads' => 0,
    'canmovetononmodforum' => 1,
    'canusecustomtools' => 1,
    'canmanageannouncements' => 0,
    'canmanagereportedposts' => 0,
    'canviewmodlog' => 0
  );

}

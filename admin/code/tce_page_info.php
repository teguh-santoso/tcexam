<?php
//============================================================+
// File name   : tce_page_info.php
// Begin       : 2004-05-21
// Last Update : 2009-08-31
//
// Description : Outputs TCExam information page.
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com S.r.l.
//               Via della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//
// License: 
//    Copyright (C) 2004-2009  Nicola Asuni - Tecnick.com S.r.l.
//    
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//    
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//    
//    You should have received a copy of the GNU General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.
//     
//    Additionally, you can't remove the original TCExam logo, copyrights statements
//    and links to Tecnick.com and TCExam websites.
//    
//    See LICENSE.TXT file for more information.
//============================================================+

/**
 * Outputs TCExam information page.
 * @package com.tecnick.tcexam.admin
 * @author Nicola Asuni
 * @copyright Copyright &copy; 2004-2009, Nicola Asuni - Tecnick.com S.r.l. - ITALY - www.tecnick.com - info@tecnick.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link www.tecnick.com
 * @since 2004-05-21
 */

/**
 */

require_once('../config/tce_config.php');

$pagelevel = K_AUTH_ADMIN_INFO;
require_once('../../shared/code/tce_authorization.php');

$thispage_title = $l['t_page_info'];
require_once('../code/tce_page_header.php');

require_once('tce_page_header.php');

echo '<div class="container">'.K_NEWLINE;

echo ''.$l['d_tcexam_desc'].'<br />'.K_NEWLINE;

echo '<ul class="credits">'.K_NEWLINE;
echo '<li><strong>'.$l['w_author'].':</strong> Nicola Asuni</li>'.K_NEWLINE;
echo '<li><strong>Copyright:</strong><br /> (c) 2004-2009 Nicola Asuni - Tecnick.com s.r.l.<br />'.K_NEWLINE;
echo 'Via Della Pace, 11 - 09044 - Quartucciu (CA) - ITALY<br />'.K_NEWLINE;
echo '<a href="mailto:info@tecnick.com">info@tecnick.com</a> - '.K_NEWLINE;
echo '<a href="http://www.tecnick.com" title="'.$l['m_new_window_link'].'">www.tecnick.com</a></li>'.K_NEWLINE;
echo '<li><strong>'.$l['w_license'].':</strong><br />This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.<br />This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.<br />You should have received a copy of the GNU General Public License along with this program.  If not, see <a href="http://www.gnu.org/licenses/" title="GNU Licenses">http://www.gnu.org/licenses/</a>.<br />Additionally, you can\'t remove the original TCExam logo, copyrights statements and links to Tecnick.com and TCExam websites.<br />See <a href="../../LICENSE.TXT" title="'.$l['m_new_window_link'].'">LICENSE.TXT</a> file for more information.</li>'.K_NEWLINE;
echo '</ul>'.K_NEWLINE;

echo '<h2>'.$l['t_third_parties'].'</h2>'.K_NEWLINE;

echo '<ul class="credits">'.K_NEWLINE;

echo '<li><strong>PHPMailer</strong><br />
Full Featured Email Transfer Class for PHP.<br />
Author: Brent R. Matzelle (<a href="mailto:bmatzelle@yahoo.com">bmatzelle@yahoo.com</a>)<br />
Homepage: <a href="http://phpmailer.sourceforge.net/">http://phpmailer.sourceforge.net/</a><br />
License: <a href="http://www.gnu.org/copyleft/lesser.html" title="GNU Lesser General Public License">LGPL (GNU LESSER GENERAL PUBLIC LICENSE)</a><br />
Location: /shared/phpmailer/<br /><br />
</li>'.K_NEWLINE;

echo '<li><strong>LaTeX rendering Class</strong> is based on:<br />
LaTeX Rendering Class v0.8 by Benjamin Zeiss, currently maintained by Steve Mayer.<br />
Homepage: <a href="http://www.mayer.dial.pipex.com/tex.htm">http://www.mayer.dial.pipex.com/tex.htm</a><br />
License: <a href="http://www.gnu.org/copyleft/gpl.html" title="GNU GENERAL PUBLIC LICENSE">GNU GENERAL PUBLIC LICENSE</a><br/>
Location: /shared/code/tce_latexrender.php<br /><br />
</li>'.K_NEWLINE;

echo '<li><strong>Radius Class</strong><br />
Radius client implementation in pure PHP.<br />
Author: SysCo/al (<a href="mailto:developer@sysco.ch">developer@sysco.ch</a>)<br />
Homepage: <a href="http://developer.sysco.ch/php/">http://developer.sysco.ch/php/</a><br />
License: <a href="http://www.gnu.org/copyleft/lesser.html" title="GNU Lesser General Public License">LGPL (GNU LESSER GENERAL PUBLIC LICENSE)</a><br />
Location: /shared/radius/<br /><br />
</li>'.K_NEWLINE;

echo '<li><strong>phpCAS</strong><br />
CAS client in PHP.<br />
Copyright: Copyright &copy; 2003-2008, The ESUP-Portail consortium &amp; the JA-SIG Collaborative. All rights reserved.<br />
Author: <a href="http://www.ja-sig.org/wiki/display/~paubry">Pascal Aubry</a>.<br />
Developers: <a href="http://www.ja-sig.org/wiki/display/~paubry">Pascal Aubry</a>, University of Rennes 1, 
<a href="http://www.ja-sig.org/wiki/display/~saltybeagle">Brett Bieber</a>, University of Nebraska-Lincoln, 
<a href="http://www.ja-sig.org/wiki/display/~jmarchal">Julien Marchal</a>, University of Nancy 2, 
<a href="http://www.ja-sig.org/wiki/display/~olivierberger">Olivier Berger</a>, Institut TELECOM, SudParis.<br />
This class includes an integrated copy of <a href="http://alexandre.alapetite.net/doc-alex/domxml-php4-php5/">domxml-php4-php5.php</a>, written by <a href="http://alexandre.alapetite.net/cv/">Alexandre Alapetite</a>, Copyright 2004, <a href="http://creativecommons.org/licenses/by-sa/2.0/fr/">Licence: Creative Commons "Attribution-ShareAlike 2.0 France" BY-SA</a>.<br />
This class has been changed and fixed for better PHP5 compatibility by: Tim Gebhardt (DePaul University\'s College of Computing and Digital Media) and Nicola Asuni (Tecnick.com s.r.l.).<br />
Homepage: <a href="http://www.ja-sig.org/wiki/display/CASC/phpCAS">http://www.ja-sig.org/wiki/display/CASC/phpCAS</a><br />
License: <a href="http://www.opensource.org/licenses/bsd-license.php">New BSD License</a>, an <a href="http://www.opensource.org/docs/osd">OSI-certified</a> ("open") and <a href="http://www.gnu.org/licenses/license-list.html">Gnu/FSF-recognized</a> ("free") license.<br />
Location: /shared/cas/<br /><br />
</li>'.K_NEWLINE;

echo '<li><strong>The DHTML Calendar</strong><br />
Calendar widget written in Javascript.<br />
Author: Mihai Bazon (<a href="mailto:mihai_bazon@yahoo.com">mihai_bazon@yahoo.com</a>)<br />
Homepage: <a href="http://dynarch.com/mishoo/">http://dynarch.com/mishoo/</a><br />
License: <a href="http://www.gnu.org/copyleft/lesser.html" title="GNU Lesser General Public License">LGPL (GNU LESSER GENERAL PUBLIC LICENSE)</a><br />
Location: /shared/jscripts/jscalendar/<br /><br />
</li>'.K_NEWLINE;

echo '</ul>'.K_NEWLINE;

echo '<h2>'.$l['t_translations'].'</h2>'.K_NEWLINE;

echo '<ul class="credits">'.K_NEWLINE;
echo '<li>[AR] Arabic : Hatim Alahmadi</li>'.K_NEWLINE;
echo '<li>[BG] Bulgarian : Georgi Kostadinov</li>'.K_NEWLINE;
echo '<li>[BR] Brazilian Portuguese : Carlos Eduardo Vianna - SouthTech Datacenter Brazil [http://www.stech.net.br]</li>'.K_NEWLINE;
echo '<li>[CN] Chinese : Liu Yongxin</li>'.K_NEWLINE;
echo '<li>[DE] German : Oliver Kasch</li>'.K_NEWLINE;
echo '<li>[EL] Greek : Kottas Alexandros</li>'.K_NEWLINE;
echo '<li>[EN] English : Nicola Asuni - Tecnick.com S.r.l</li>'.K_NEWLINE;
echo '<li>[ES] Spanish : Carlos Alarcon, Maria del Rocio Peñas Serrano, Alejandra Ruiz</li>'.K_NEWLINE;
echo '<li>[FR] French : Roger Koukerjinian - Transtxt [http://www.transtxt.com]</li>'.K_NEWLINE;
echo '<li>[HI] Hindi : Mahesh K Bhandari ,Shekhar K Maravi, Pradeep K Nayak (M.Tech CSE, IIT Bombay)</li>'.K_NEWLINE;
echo '<li>[HE] Hebrew : Oron Peled</li>'.K_NEWLINE;
echo '<li>[HU] Hungarian : Peter Ivanyi, Tibor Balázs</li>'.K_NEWLINE;
echo '<li>[ID] Indonesian : Ahmad Bardosono</li>'.K_NEWLINE;
echo '<li>[IT] Italian : Nicola Asuni - Tecnick.com S.r.l</li>'.K_NEWLINE;
echo '<li>[JP] Japanese : Koji Nakajima</li>'.K_NEWLINE;
echo '<li>[MR] Marathi : Tushar Sayankar</li>'.K_NEWLINE;
echo '<li>[MS] Malay (Bahasa Melayu) : Arvind Prakash Jha</li>'.K_NEWLINE;
echo '<li>[NL] Dutch : Chris de Boer</li>'.K_NEWLINE;
echo '<li>[PL] Polish : Tomasz Parol</li>'.K_NEWLINE;
echo '<li>[RO] Romanian : Ovidiu Dragomir</li>'.K_NEWLINE;
echo '<li>[RU] Russian : Andrey</li>'.K_NEWLINE;
echo '<li>[TR] Turkish : Mehmet Arif Icir</li>'.K_NEWLINE;
echo '<li>[VN] Vietnamese : Nguyen Quynh Nga</li>'.K_NEWLINE;
echo '</ul>'.K_NEWLINE;

echo '</div>'.K_NEWLINE;

echo '<br />'.K_NEWLINE;

// display credit logos
echo '<div class="creditslogos">'.K_NEWLINE;
echo '<a href="http://www.gnu.org/copyleft/gpl.html"><img src="../../images/credits/gplv3-88x31.png" alt="GNU General Public License" width="88" height="31" /></a>'.K_NEWLINE;
echo '<a href="http://www.php.net"><img src="../../images/credits/poweredby_php_88x31.png" alt="Powered by PHP" width="88" height="31" /></a>'.K_NEWLINE;
echo '<a href="http://www.mysql.com"><img src="../../images/credits/poweredbymysql_88x31.png" alt="Powered by MySQL" width="88" height="31" /></a>'.K_NEWLINE;
echo '<a href="http://www.postgresql.org"><img src="../../images/credits/poweredbypgsql_88x31.png" alt="Powered by PostgreSQL" width="88" height="31" /></a>'.K_NEWLINE;
echo '<a href="http://validator.w3.org/check/referer"><img src="../../images/credits/w3c_xhtml10_88x31.png" alt="Valid XHTML 1.0!" height="31" width="88" /></a>'.K_NEWLINE;
echo '<a href="http://jigsaw.w3.org/css-validator/"><img src="../../images/credits/w3c_css_88x31.png" alt="Valid CSS1!" height="31" width="88" /></a>'.K_NEWLINE;
echo '<a href="http://www.w3.org/WAI/WCAG1AAA-Conformance" title="Explanation of Level Triple-A Conformance"><img src="../../images/credits/w3c_wai_aaa_88x31.png" alt="Level Triple-A conformance icon, W3C-WAI Web Content Accessibility Guidelines 1.0" width="88" height="31" /></a>'.K_NEWLINE;
echo '</div>'.K_NEWLINE;

require_once('tce_page_footer.php');

//============================================================+
// END OF FILE                                                 
//============================================================+
?>

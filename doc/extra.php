<?PHP
/* Documentation for PHP-PDB library
 *
 * Copyright (C) 2001 - PHP-PDB development team
 * Licensed under the GNU LGPL software license.
 * See the doc/LEGAL file for more information
 * See http://php-pdb.sourceforge.net/ for more information about the library
 */

include("./functions.inc");

StandardHeader('Extra Information');

?>

<h3>Making sure PHP-PDB works</h3>

<p>After you installed PHP-PDB somewhere, just use your web browser and view
<tt>pdb-test.php</tt>.  It will perform a few tests and tell you the results
of the tests.  They should all say <font color=green>pass</font>.  If they
don't, contact me for help.</p>

<h3>Contact information</h3>

<p>I finally have mailing lists set up on the <a
href="http://sourceforge.net/projects/php-pdb/">project page</a> on <a
href="http://sourceforge.net/">SourceForge</a>.  If you are asking for help,
please subscribe to the mailing list and ask your question.  Your answer
should come to you pretty fast.  If you abhore mailing lists and would
greatly prefer to not subscribe to a mailing list, just email me directly.
I'll simply forward your request to the mailing list and then ask that the
list members reply to you and to the list.  My email address is at the
bottom of the page.</p>

<h3>Legalese</h3>

<P>PHP-PDB is released under the <a
href="http://www.gnu.org/copyleft/lesser.html">GNU LGPL</a> and is basically
free to use for everyone.</p>

<h3>Still to do</h3>

<ul>
<li>Add better <a
href="http://www.handmark.com/products/mobiledb/dbstructure.htm">MobileDB</a>
support.</li>
<li>Add todo format</li>
<li>Add compression, decompression, and loading to DOC files.
[ <a
href="http://www.linuxmafia.com/pub/palmos/development/pilotdoc-compression.html">AportisDoc</a>
<a href="http://www.pyrite.org/doc_format.php">Pyrite</a> ]
</li>
<li>Add example program <!-- twister! --> that converts HTML/text on the web
to DOC format.</li>
<li>Project Gutenberg files would be nice to convert from <a
href="http://www.promo.net/pg/vol/how.html">their format</a> to DOC.</li>
<li>Add phonebook format</li>
<li>Add memo format</li>
<li>Add PDAToolbox support (waiting for information about structure -- if
you have info, please mail me)</li>
<li>Maybe look closer at <a href="http://mmmm.free.fr/palm/">palmlib</a></li>
<li>Wouldn't image support from <a
href="http://palmimage.sourceforge.net/">PalmImage</a> be grand?  Especially
if it merged with GD.</li>
<li>Take an in-depth look <a
href="http://zurk.sourceforge.net/zdoc.html">here</a> for DOC files and for
PeanutPress files.</li>
</ul>

<h3>Credits and thanks</h3>

<p>I did actually write all code from scratch, but credit should be given to
people who wrote other open-source programs that I learned from.</p>

<ul>
<li>Arensburger, Andrew -- Thanks for making <a
   href="http://www.ooblick.com/software/coldsync/">P5-Palm</a>!  I used 
   several ideas when creating PHP-PDB, and a few comments really helped me
   out.</li>
<li>Dittgen, Pierre -- His <a 
   href="http://mmmm.free.fr/palm/download/">palmlib</a> (aka <a 
   href="http://depot.free-system.com/index.php3?projectid=2&action=show"
   >ToPTIP</a>) was handy to have around when initially adding DOC support
   to compare output and make sure mine worked.</li>
<li><a href="http://www.handmark.com">Handmark</a> -- Provided detailed 
   database structure <a
   href="http://www.handmark.com/products/mobiledb/dbstructure.htm">information</a>
   for <a href="http://www.handmark.com/products/mobiledb/">MobileDB</a>.
   Cassidy Lackey answered many of my questions.  Thanks!</li>
<li><a href="http://www.palm.com">Palm Computing, Inc.</a> -- Without them,
   there would not be a PalmOS.  Also, they provided <a
   href="http://www.palmos.com/dev/tech/docs/">documentation<a> (especially
   detailing the <a
   href="http://www.palmos.com/dev/tech/docs/FileFormats/FileFormatsTOC.html">file
   formats</a>) that made my life significantly easier.</li>
<li><a href="http://www.pyrite.org/">Pyrite</a> -- They provided a great
   <a href="http://www.pyrite.org/doc_format.php">description</a> about the 
   compression format and stored bookmarks.</li>
</ul>

<?PHP

StandardFooter();

?>

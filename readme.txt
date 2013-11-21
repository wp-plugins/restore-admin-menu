=== Restore Admin Menu (ru_RU) ===
Contributors: SergeyBiryukov
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=B6XNFLZXN3QZW
Tags: l10n, releases, ru_RU, admin, update
Requires at least: 3.5
Tested up to: 3.6
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Restores the admin menu when updating from 3.1.x or an older install to the latest release from ru.wordpress.org.

== Description ==

Up to 3.3.x, Russian WordPress packages had some CSS fixes to make room for translated strings in the admin menu and other UI elements.

In 3.4 and 3.5, those fixes were merged into core (see [#19603](http://core.trac.wordpress.org/ticket/19603) and [#20975](http://core.trac.wordpress.org/ticket/20975)). However, obsolete language files are not deleted during an automatic update (see [#20974](http://core.trac.wordpress.org/ticket/20974)). Unfortunately, this causes the admin menu to disappear when directly updating from 3.1.x or an older version to the latest releases from [ru.wordpress.org](http://ru.wordpress.org/).

The list of obsolete files:
`
wp-content/languages/ru_RU.php
wp-content/languages/ru_RU.css
wp-content/languages/ru_RU-ie.css
wp-content/languages/ms-ru_RU.css
`
The best option is just to remove them manually via FTP. If for some reason you can't do that, you can try this plugin, which restores the admin menu by unhooking `ru_accomodate_markup()` function and attempts to remove the obsolete files.

After installing and activating the plugin, try to deactivate it. If you still see the admin menu, you can safely remove the plugin, its job is done. If you can't see the admin menu, activate the plugin again.

== Installation ==

1. Go to /wp-admin/plugin-install.php.
2. Enter "Restore Admin Menu" in the search field.
3. Install and activate the plugin.

== Changelog ==

= 0.1 =
* Initial release

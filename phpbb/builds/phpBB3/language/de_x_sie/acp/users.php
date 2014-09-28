<?php
/**
*
* acp_users [Deutsch — Sie]
*
* @package language
* @version $Id: users.php 288 2007-08-24 20:47:32Z philipp $
* @copyright (c) 2005 phpBB Group; 2006 phpBB.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* (http://www.phpbb.de/team.php#group_13086)
* Frank Doerr, Dirk Gaffke, Christopher Gerharz, Ingo Köhler, Philipp Kordowich, Ingo Migliarina, Paul Rauch
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ADMIN_SIG_PREVIEW'		=> 'Signatur-Vorschau',
	'AT_LEAST_ONE_FOUNDER'	=> 'Sie können diesen Gründer nicht in einen normalen Benutzer umwandeln. Es muss mindestens ein Gründer in diesem Board vorhanden sein. Wenn Sie den Gründer-Status dieses Benutzers ändern wollen, müssen Sie zuerst einen anderen Benutzer zum Gründer ernennen.',

	'BAN_ALREADY_ENTERED'	=> 'Die Sperre wurde bereits früher erfolgreich erstellt. Die Liste der Sperren wurde nicht aktualisiert.',
	'BAN_SUCCESSFUL'		=> 'Sperre erfolgreich hinzugefügt.',

	'CANNOT_BAN_FOUNDER'			=> 'Sie können keine Gründer sperren.',
	'CANNOT_BAN_YOURSELF'			=> 'Sie können sich nicht selber sperren.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Sie können keine Benutzerkonten von Bots deaktivieren. Deaktivieren Sie stattdessen den Bot.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Sie können keine Benutzerkonten von Gründern sperren.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Sie können Ihr eigenes Benutzerkonto nicht deaktivieren.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Sie können keine erneute Aktivierung für Bots erzwingen. Deaktivieren Sie stattdessen den Bot.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Sie können keine erneute Aktivierung für Benutzerkonten von Gründern erzwingen.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Sie können für Ihr eigenes Benutzerkonto keine erneute Aktivierung erzwingen.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Sie können das Gäste-Benutzerkonto nicht löschen.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Sie können Ihr eigenes Benutzerkonto nicht löschen.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Sie können keine ignorierten Mitglieder zu Gründern ernennen.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Sie müssen Benutzer erst aktivieren, bevor Sie sie zum Gründer ernennen können, da nur aktive Benutzer zum Gründer ernannt werden können.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Muss nur angeben werden, wenn Sie die E-Mail-Adresse ändern.',

	'DELETE_POSTS'			=> 'Beiträge löschen',
	'DELETE_USER'			=> 'Benutzer löschen',
	'DELETE_USER_EXPLAIN'	=> 'Bitte beachten Sie, dass das Löschen eines Benutzers endgültig ist und nicht rückgängig gemacht werden kann.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Erneute Aktivierung des Benutzerkontos erfolgreich erzwungen.',
	'FOUNDER'						=> 'Gründer',
	'FOUNDER_EXPLAIN'				=> 'Gründer haben alle Administrations-Rechte und können von Nicht-Gründern nicht gesperrt, gelöscht oder geändert werden.',

	'GROUP_APPROVE'					=> 'Mitglied aufnehmen',
	'GROUP_DEFAULT'					=> 'Zur Hauptgruppe des Mitglieds machen',
	'GROUP_DELETE'					=> 'Mitglied aus Gruppe entfernen',
	'GROUP_DEMOTE'					=> 'Leitung entziehen',
	'GROUP_PROMOTE'					=> 'Zum Gruppenleiter ernennen',

	'IP_WHOIS_FOR'			=> 'Whois für Adresse %s',

	'LAST_ACTIVE'			=> 'Letzte Anmeldung',

	'MOVE_POSTS_EXPLAIN'	=> 'Bitte wählen Sie ein Forum aus, in das alle Beiträge verschoben werden sollen, die der Benutzer erstellt hat.',

	'NO_SPECIAL_RANK'		=> 'Kein spezieller Rang zugewiesen',
	'NOT_MANAGE_FOUNDER'	=> 'Sie haben versucht, einen Benutzer mit Gründer-Status zu verwalten. Nur Benutzer mit Gründer-Status können andere Gründer verwalten.',

	'QUICK_TOOLS'			=> 'Schnellauswahl',

	'REGISTERED'			=> 'Registriert',
	'REGISTERED_IP'			=> 'Registriert von IP-Adresse',
	'RETAIN_POSTS'			=> 'Beiträge erhalten',

	'SELECT_FORM'			=> 'Auswahl',
	'SELECT_USER'			=> 'Benutzer auswählen',

	'USER_ADMIN'					=> 'Benutzer-Verwaltung',
	'USER_ADMIN_ACTIVATE'			=> 'Benutzer aktivieren',
	'USER_ADMIN_ACTIVATED'			=> 'Benutzer erfolgreich aktiviert.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar erfolgreich aus dem Benutzerkonto entfernt.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Über E-Mail-Adresse sperren',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-Mail-Adresse über Benutzer-Verwaltung gesperrt',
	'USER_ADMIN_BAN_IP'				=> 'Über IP-Adresse sperren',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP-Adresse über Benutzer-Verwaltung gesperrt',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Benutzername über Benutzer-Verwaltung gesperrt',
	'USER_ADMIN_BAN_USER'			=> 'Über Benutzernamen sperren',
	'USER_ADMIN_DEACTIVATE'			=> 'Benutzer deaktivieren',
	'USER_ADMIN_DEACTIVED'			=> 'Benutzer erfolgreich deaktiviert.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Alle Dateianhänge löschen',
	'USER_ADMIN_DEL_AVATAR'			=> 'Avatar löschen',
	'USER_ADMIN_DEL_POSTS'			=> 'Alle Beiträge löschen',
	'USER_ADMIN_DEL_SIG'			=> 'Signatur löschen',
	'USER_ADMIN_EXPLAIN'			=> 'Hier können Sie die Daten Ihrer Benutzer einstellen und bestimmte Einstellungen ändern.',
	'USER_ADMIN_FORCE'				=> 'Erneute Aktivierung erzwingen',
	'USER_ADMIN_MOVE_POSTS'			=> 'Alle Beiträge verschieben',
	'USER_ADMIN_SIG_REMOVED'		=> 'Signatur erfolgreich aus dem Benutzerkonto entfernt.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Alle Dateianhänge des Benutzers erfolgreich gelöscht.',
	'USER_AVATAR_UPDATED'			=> 'Avatar-Daten des Benutzers erfolgreich geändert.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Benutzerdefinierte Profil-Felder',
	'USER_DELETED'					=> 'Benutzer erfolgreich gelöscht.',
	'USER_GROUP_ADD'				=> 'Benutzer einer Gruppe hinzufügen',
	'USER_GROUP_NORMAL'				=> 'Normale Gruppen, in denen der Benutzer Mitglied ist',
	'USER_GROUP_PENDING'			=> 'Gruppen, bei denen der Benutzer auf Aufnahme wartet',
	'USER_GROUP_SPECIAL'			=> 'Systemgruppen, in denen der Benutzer Mitglied ist',
	'USER_NO_ATTACHMENTS'			=> 'Es gibt keine angehängten Dateien, die angezeigt werden könnten.',
	'USER_OVERVIEW_UPDATED'			=> 'Benutzerdaten erfolgreich geändert.',
	'USER_POSTS_DELETED'			=> 'Alle Beiträge des Benutzers erfolgreich gelöscht.',
	'USER_POSTS_MOVED'				=> 'Beiträge des Benutzers erfolgreich in Zielform verschoben.',
	'USER_PREFS_UPDATED'			=> 'Einstellungen des Benutzers erfolgreich geändert.',
	'USER_PROFILE'					=> 'Benutzer-Profil',
	'USER_PROFILE_UPDATED'			=> 'Benutzer-Profil erfolgreich aktualisiert.',
	'USER_RANK'						=> 'Benutzerrang',
	'USER_RANK_UPDATED'				=> 'Benutzerrang erfolgreich aktualisiert.',
	'USER_SIG_UPDATED'				=> 'Signatur des Benutzers erfolgreich geändert.',
	'USER_TOOLS'					=> 'Standard-Funktionen',
));

?>
<?php
/** 
*
* posting.php [Arabic]
*
* @package language
* @version $Id: posting.php,v 1.68 2007/06/16 12:25:36 acydburn Exp $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-18 - phpBBEGYPT.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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
	'ADD_ATTACHMENT'			=> 'أضف ملف مرفق',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'إذا كنت ترغب بإضافة ملف مرفق واحد أو أكثر فعليك بإكمال الحقول التالية',
	'ADD_FILE'					=> 'أضف الملف',
	'ADD_POLL'	=> 'إضافة تصويت',
	'ADD_POLL_EXPLAIN'	=> 'إذا كنت لا تريد إضافة تصويت اترك هذا الحقل فارغاً',
	'ALREADY_DELETED'			=> 'عفواً ولكن هذه الرسالة قد حذفت للتو',
	'ATTACH_QUOTA_REACHED'		=> 'عفواً، ولكنك بلغت الحد الأقصى لحجم المرفق',
	'ATTACH_SIG'	=> 'أرفق التوقيع (يمكنك ضبط إعدادات التوقيع من لوحة التحكم)',
	'BBCODE_A_HELP'	=> 'الملفات المرفقة: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'	=> 'خط سميك: [b]text[/b]',
	'BBCODE_C_HELP'	=> 'عرض كود: [code]code[/code]',
	'BBCODE_E_HELP'	=> 'قائمة: Add list element',
	'BBCODE_F_HELP'	=> 'حجم الخط: [size=x-small]small text[/size]',
	'BBCODE_IS_OFF'	=> '%sBBCode%s<em>  غير متاح </em>',
	'BBCODE_IS_ON'	=> '%sBBCode%s<em>  متاح  </em>',
	'BBCODE_I_HELP'	=> 'خط مائل: [i]text[/i]',
	'BBCODE_L_HELP'	=> 'قائمة: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'	=> 'عنصر في قائمة: [*]text[/*]',
	'BBCODE_O_HELP'	=> 'قائمة مرقمة: [list=]text[/list]',
	'BBCODE_P_HELP'	=> 'صورة: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'	=> 'نص مقتبس: [quote]text[/quote]',
	'BBCODE_S_HELP'	=> 'لون الخط: [color=red]text[/color]  =#FF0000يمكنك أيضاً اختيار اللون',
	'BBCODE_U_HELP'	=> 'خط تحت النص: [u]text[/u]',
	'BBCODE_W_HELP'	=> 'عنوان انترنت: [url]http://url[/url] or [url=http://url]URL text[/url]',
	'BBCODE_D_HELP'	=> 'فلاش: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'	=> 'لا يمكنك إرسال مشاركة بهذه السرعة فانتظر قليلاً',
	'CANNOT_DELETE_REPLIED'	=> 'يمكنك حذف المواضيع التي لم يرد عليها فقط',
	'CANNOT_EDIT_POST_LOCKED'	=> 'هذا الموضوع مغلق. لا يمكنك الرد',
	'CANNOT_EDIT_TIME'	=> 'لا يمكنك تعديل أو حذف هذا الإرسال',
	'CANNOT_POST_ANNOUNCE'	=> 'عفواً. لا يمكنك إرسال إعلانات',
	'CANNOT_POST_STICKY'	=> 'عفواً. لا يمكنك وضع مواضيع مثبتة',
	'CHANGE_TOPIC_TO'	=> 'غير نوع الموضوع إلى:',
	'CLOSE_TAGS'	=> 'غلق العلامات',
	'CURRENT_TOPIC'	=> 'الموضوع الحالي',
	'DELETE_FILE'	=> 'حذف الملف',
	'DELETE_MESSAGE'	=> 'حذف الرسالة',
	'DELETE_MESSAGE_CONFIRM'	=> 'هل تريد فعلا حذف الرسالة ؟',
	'DELETE_OWN_POSTS'	=> 'عفواً. يمكنك حذف مواضيعك فقط',
	'DELETE_POST_CONFIRM'	=> 'هل تريد فعلاً حذف هذا الموضوع ؟',
	'DELETE_POST_WARN'	=> 'بمجرد الحذف لا يمكنك استعادة الموضوع مرة أخرى',
	'DISABLE_BBCODE'	=> 'تعطيل BBCode',
	'DISABLE_MAGIC_URL'			=> 'لا تقم بتفعيل الروابط تلقائياً',
	'DISABLE_SMILIES'	=> 'تعطيل الابتسامات',
	'DISALLOWED_EXTENSION'	=> 'امتداد الملف %s غير مسموح به',
	'DRAFT_LOADED'	=> 'تم تحميل المسودة في مكان كتابة الرسالة , ربما تريد إنهاء عملك الآن<br />سيتم حذف المسودة بعد إرسال مشاركتك',
	'DRAFT_LOADED_PM'	=> 'تم تحميل المسودة في مكان كتابة الرسالة , ربما تريد إنهاء الرسالة الخاصة الآن<br />سيتم حذف المسودة بعد إرسال الرسالة الخاصة',
	'DRAFT_SAVED'	=> 'تم حفظ المسودة',
	'DRAFT_TITLE'	=> 'عنوان المسودة',
	'EDIT_REASON'	=> 'سبب تعديل المشاركة',
	'EMPTY_FILEUPLOAD'	=> 'الملف الذي تم إرفاقه فارغ',
	'EMPTY_MESSAGE'	=> 'يجب إدخال نص المشاركة',
	'EMPTY_REMOTE_DATA'	=> 'لا يمكن رفع الملف , حاول مرة أخرى',
	'FLASH_IS_OFF'	=> '[flash]<em>  غير متاح  </em>',
	'FLASH_IS_ON'	=> '[flash]<em>  متاح  </em>',
	'FLOOD_ERROR'	=> 'لا يمكنك المشاركة بهذه السرعة , انتظر قليلاً',
	'FONT_COLOR'	=> 'لون الخط',
	'FONT_COLOR_HIDE'	=> 'إخفاء لون الخط',
	'FONT_HUGE'	=> 'ضخم',
	'FONT_LARGE'	=> 'كبير',
	'FONT_NORMAL'	=> 'عادي',
	'FONT_SIZE'	=> 'حجم الخط',
	'FONT_SMALL'	=> 'صغير',
	'FONT_TINY'	=> 'صغير جداً',
	'GENERAL_UPLOAD_ERROR'	=> 'لا يمكن إرفاق الملف إلى %s',
	'IMAGES_ARE_OFF'	=> '[img]<em>  غير متاح  </em>',
	'IMAGES_ARE_ON'	=> '[img]<em>  متاح  </em>',
	'INVALID_FILENAME'	=> '%s هو اسم غير صحيح',
	'LOAD'	=> 'تحميل',
	'LOAD_DRAFT'	=> 'تحميل مسودة',
	'LOAD_DRAFT_EXPLAIN'	=> 'هنا يمكنك اختيار المسودة التي تريد إكمال كتابتها . المشاركة التي تقوم بكتابتها الآن ستحذف , جميع محتوايتها أيضاً . يمكنك مشاهدة , تعديل أو حذف المسودات من لوحة التحكم الخاصة بك',
	'LOGIN_EXPLAIN_BUMP'	=> 'يجب تسجيل الدخول قبل تعديل مشاركة في هذا المنتدى',
	'LOGIN_EXPLAIN_DELETE'	=> 'يجب تسجيل الدخول قبل حذف مشاركة من هذا المنتدى',
	'LOGIN_EXPLAIN_POST'	=> 'يجب تسجيل الدخول قبل المشاركة في هذا المنتدى',
	'LOGIN_EXPLAIN_QUOTE'	=> 'يجب تسجيل الدخول قبل اقتباس مشاركة في هذا المنتدى',
	'LOGIN_EXPLAIN_REPLY'	=> 'يجب تسجيل الدخول قبل إرسال رد في هذا المنتدى',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'أكبر حجم خط يمكنك استعماله هو %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'أقصى ارتفاع لملفات الفلاش يمكنك إضافته هو %1$d بكسل',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'أقصى عرض لملفات الفلاش يمكنك إضافته هو %1$d بكسل',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'أقصى ارتفاع للصور المضافة هو %1$d بكسل',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'أقصى عرض للصور المضافة هو %1$d بكسل',
	'MESSAGE_BODY_EXPLAIN'	=> 'اكتب رسالتك هنا , يجب أن تكون أقل من <strong>%d</strong> حرف',
	'MESSAGE_DELETED'	=> 'تم حذف المشاركة بنجاح',
	'MORE_SMILIES'	=> 'عرض كل الابتسامات',
	'NOTIFY_REPLY'	=> 'أبلغني عند وجود ردود',
	'NOT_UPLOADED'	=> 'لا يمكن إرفاق الملف',
	'NO_DELETE_POLL_OPTIONS'	=> 'لا يمكنك حذف خيارات التصويت',
	'NO_PM_ICON'	=> 'لا يوجد أيقونة للرسائل الخاصة',
	'NO_POLL_TITLE'	=> 'يجب إدخال سؤال التصويت',
	'NO_POST'	=> 'الموضوع غير موجود',
	'NO_POST_MODE'	=> 'لم يتم تحديد موضوع',
	'PARTIAL_UPLOAD'	=> 'تم رفع جزء من الملف فقط',
	'PHP_SIZE_NA'	=> 'حجم الملف المرفق كبير جدا',
	'PHP_SIZE_OVERRUN'	=> 'حجم الملف المرفق كبير جدا , أقصى حجم للملف هو %d ميجابايت',
	'PLACE_INLINE'	=> 'ضمن الملف',
	'POLL_DELETE'	=> 'حذف تصويت',
	'POLL_FOR'	=> 'زمن التصويت',
	'POLL_FOR_EXPLAIN'	=> 'أدخل أو اتركه فارغاً لجعل التصويت للأبد',
	'POLL_MAX_OPTIONS'	=> 'خيارات لكل عضو',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'عدد الخيارات التي يستطيع العضو الاختيار بينها',
	'POLL_OPTIONS'	=> 'خيارات التصويت',
	'POLL_OPTIONS_EXPLAIN'	=> 'ضع كل خيار في سطر مستقل . يمكنك إضافة خيارات تصل إلى <strong>%d</strong> خيار',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'ضع كل خيار في سطر مستقل . يمكنك إضافة خيارات تصل إلى <strong>%d</strong> خيار. إذا قمت بإضافة أو حذف خيارات فسيتم تصفير جميع الأصوات السابقة.',
	'POLL_QUESTION'	=> 'سؤال التصويت',
	'POLL_TITLE_TOO_LONG'	=> 'عنوان التصويت يجب أن يحتوي على الأقل 100 حرف',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'عنوان التصويت كبير جداً , نقترح إزالة الابتسامات',
	'POLL_VOTE_CHANGE'	=> 'السماح بالتصويت أكثر من مرة',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'إذا سمحت به سيتيح للأعضاء تغيير تصويتاتهم',
	'POSTED_ATTACHMENTS'	=> 'الملفات المرفقة',
	'POST_APPROVAL_NOTIFY'		=> 'سيتم إعلامك عند الموافقة على المشاركة.',
	'POST_CONFIRMATION'	=> 'تأكيد الإرسال',
	'POST_CONFIRM_EXPLAIN'	=> 'لمنع الإرسال الآلي يطلب المنتدى إدخال الرمز الأمني الموجود في الصورة . إذا كانت غير واضحة نرجو مراسلة %sالإدارة%s',
	'POST_DELETED'	=> 'تم حذف الرسالة بنجاح',
	'POST_EDITED'	=> 'تم تعديل الرسالة بنجاح',
	'POST_EDITED_MOD'	=> 'تم تعديل الرسالة بنجاح , سيتم نشرها بعد مراجعتها من قبل المشرف . سيتم إعلامك عند الموافقة على المشاركة',
	'POST_GLOBAL'	=> 'عام',
	'POST_ICON'	=> 'أيقونة الموضوع',
	'POST_NORMAL'	=> 'عادي',
	'POST_REVIEW'	=> 'استعرض الموضوع',
	'POST_REVIEW_EXPLAIN'	=> 'على الأقل تم وضع رد على الموضوع . ربما تريد مشاهدة موضوعك على ضوء ذلك',
	'POST_STORED'	=> 'تم إرسال المشاركة بنجاح',
	'POST_STORED_MOD'	=> 'تم تقديم المشاركة بنجاح وسيتم نشرها بعد موافقة المشرف . سيتم إعلامك عند الموافقة على المشاركة',
	'POST_TOPIC_AS'	=> 'أرسل موضوع كـ',
	'PROGRESS_BAR'	=> 'شريط الحالة',
	'QUOTE_DEPTH_EXCEEDED'		=> 'يمكنك دمج %1$d اقتباسات فقط مع بعضهم البعض',
	'SAVE'	=> 'حفظ',
	'SAVE_DATE'	=> 'حفظ في',
	'SAVE_DRAFT'	=> 'حفظ مسودة',
	'SAVE_DRAFT_CONFIRM'	=> 'المسودات يتم فيها حفظ عنوان المشاركة ومحتواها فقط , أي إضافة أخرى سيتم حذفها . هل تريد حفظ المسودة الآن ؟',
	'SMILIES'	=> 'ابتسامات',
	'SMILIES_ARE_OFF'	=> 'الابتسامات<em>  غير متاحة  </em>',
	'SMILIES_ARE_ON'	=> 'الابتسامات<em>  متاحة  </em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'مدة الإعلان/الموضوع المثبت',
	'STICK_TOPIC_FOR'	=> 'ثبت الموضوع لـ',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'أدخل أو اتركه فارغاً لجعل الإعلان أو الموضوع المثبت للأبد',
	'STYLES_TIP'	=> 'معلومات: يمكن تطبيق الأنماط على الخط بسرعة',
	'TOO_FEW_CHARS'	=> 'الرسالة قصيرة جداً',
	'TOO_FEW_POLL_OPTIONS'	=> 'يجب إدخال خيارين في التصويت على الأقل',
	'TOO_MANY_ATTACHMENTS'	=> 'لا يمكنك إرفاق ملف آخر , أقصى عدد هو %d',
	'TOO_MANY_CHARS'	=> 'الرسالة طويلة جداً',
	'TOO_MANY_CHARS_POST'		=> 'Your message contains %1$d characters. The maximum number of allowed characters is %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Your signature contains %1$d characters. The maximum number of allowed characters is %2$d.',
	'TOO_MANY_POLL_OPTIONS'	=> 'لقد أدخلت خيارات تصويت كثيرة جداً',
	'TOO_MANY_SMILIES'	=> 'تحتوي الرسالة على ابتسامات كثيرة جداً . أكبر عدد للابتسامات هو %d',
	'TOO_MANY_URLS'	=> 'تحتوي رسالتك على عدد كبير من عناوين الانترنت . أكبر عدد مسموح به هو %d',
	'TOO_MANY_USER_OPTIONS'	=> 'لا يمكنك إضافة خيارات أخرى للتصويت',
	'TOPIC_BUMPED'	=> 'تم تعديل الموضوع بنجاح',
	'UNAUTHORISED_BBCODE'	=> 'لا يمكنك استخدام أكواد BBCode المحددة: %s',
	'UNGLOBALISE_EXPLAIN'	=> 'لإعادة الموضوع من الوضع العام , يجب اختيار المنتدى الذي تريد وضع الموضوع فيه',
	'UPDATE_COMMENT'	=> 'تحديث تعليق',
	'URL_INVALID'	=> 'عنوان موقع انترنت غير صحيح',
	'URL_NOT_FOUND'	=> 'الملف غير موجود',
	'URL_IS_OFF'	=> '[url] <em>  غير متاح  </em>',
	'URL_IS_ON'	=> '[url] <em>  متاح  </em>',
	'USER_CANNOT_BUMP'	=> 'لا يمكنك إضافة ردود لهذا القسم',
	'USER_CANNOT_DELETE'	=> 'لا يمكنك حذف مواضيع في هذا المنتدى',
	'USER_CANNOT_EDIT'	=> 'لا يمكنك تعديل مواضيع في هذا المنتدى',
	'USER_CANNOT_REPLY'	=> 'لا يمكنك الرد في هذا المنتدى',
	'USER_CANNOT_FORUM_POST'	=> 'لا تستطيع القيام بعملية الإرسال في هذا المنتدى لعدم دعم المنتدى للعملية',
	'VIEW_MESSAGE'				=> '%sاضغط هنا لاستعراض الرسالة%s',
	'WRONG_FILESIZE'	=> 'الملف كبير جداً , أكبر حجم مسموح به هو %1d %2s',
	'WRONG_SIZE'				=> 'أبعاد الصورة يجب أن تكون على الأقل %1$d بكسل عرضاً و %2$d بكسل ارتفاعاً وعلى الأكثر %3$d بكسل عرضاً و %4$d بكسل ارتفاعاً. أبعاد الصورة المقدمة هي %5$d بكسل عرضاً و %6$d بكسل ارتفاعاً.',
));

?>
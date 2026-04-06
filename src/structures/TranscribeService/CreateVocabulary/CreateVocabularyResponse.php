<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateVocabulary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $VocabularyName
 * @property 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE'|null $LanguageCode
 * @property 'PENDING'|'READY'|'FAILED'|null $VocabularyState
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $FailureReason
 */
class CreateVocabularyResponse extends Response
{
}

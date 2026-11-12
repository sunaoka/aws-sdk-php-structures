<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEvaluationForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationFormId
 * @property string $EvaluationFormArn
 * @property string $Title
 * @property 'DRAFT'|'ACTIVE' $Status
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $LastActivatedTime
 * @property string|null $LastActivatedBy
 * @property int $LatestVersion
 * @property int|null $ActiveVersion
 * @property bool|null $AutoEvaluationEnabled
 * @property 'de-DE'|'en-US'|'es-ES'|'fr-FR'|'it-IT'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|'ms-MY'|'af-ZA'|'sq-AL'|'am-ET'|'ar-AE'|'ar-SA'|'hy-AM'|'eu-ES'|'be-BY'|'bs-BA'|'bg-BG'|'ca-ES'|'ckb-IR'|'ckb-IQ'|'zh-TW'|'hr-HR'|'cs-CZ'|'da-DK'|'nl-BE'|'nl-NL'|'en-AU'|'en-IN'|'en-IE'|'en-NZ'|'en-AB'|'en-SG'|'en-ZA'|'en-GB'|'en-WL'|'fa-IR'|'fa-AF'|'fi-FI'|'fr-BE'|'fr-CA'|'ga-IE'|'gl-ES'|'ka-GE'|'de-AT'|'de-CH'|'el-GR'|'gu-IN'|'ht-HT'|'he-IL'|'hi-IN'|'hu-HU'|'is-IS'|'id-ID'|'jv-ID'|'km-KH'|'kn-IN'|'kk-KZ'|'lo-LA'|'lv-LV'|'lt-LT'|'mk-MK'|'ml-IN'|'mr-IN'|'ne-NP'|'no-NO'|'or-IN'|'ps-AF'|'pl-PL'|'pt-PT'|'pa-IN'|'ro-RO'|'ru-RU'|'sr-RS'|'si-LK'|'sk-SK'|'sl-SI'|'es-MX'|'es-US'|'su-ID'|'sw-BI'|'sw-KE'|'sw-RW'|'sw-TZ'|'sw-UG'|'sv-SE'|'tl-PH'|'ta-IN'|'te-IN'|'th-TH'|'tr-TR'|'uk-UA'|'uz-UZ'|'vi-VN'|'zu-ZA'|'my-MM'|'so-SO'|'yue-HK'|'et-EE'|'hmn'|'lg-UG'|'cy-GB'|'xh-ZA'|'bn-BD'|null $EvaluationFormLanguage
 * @property 'AGENT'|'AUTOMATED'|'CUSTOMER'|null $ContactInteractionType
 * @property array<string, string>|null $Tags
 * @property string|null $AIVersion
 */
class EvaluationFormSearchSummary extends Shape
{
    /**
     * @param array{
     *     EvaluationFormId: string,
     *     EvaluationFormArn: string,
     *     Title: string,
     *     Status: 'DRAFT'|'ACTIVE',
     *     Description?: string|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     CreatedBy: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedBy: string,
     *     LastActivatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastActivatedBy?: string|null,
     *     LatestVersion: int,
     *     ActiveVersion?: int|null,
     *     AutoEvaluationEnabled?: bool|null,
     *     EvaluationFormLanguage?: 'de-DE'|'en-US'|'es-ES'|'fr-FR'|'it-IT'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|'ms-MY'|'af-ZA'|'sq-AL'|'am-ET'|'ar-AE'|'ar-SA'|'hy-AM'|'eu-ES'|'be-BY'|'bs-BA'|'bg-BG'|'ca-ES'|'ckb-IR'|'ckb-IQ'|'zh-TW'|'hr-HR'|'cs-CZ'|'da-DK'|'nl-BE'|'nl-NL'|'en-AU'|'en-IN'|'en-IE'|'en-NZ'|'en-AB'|'en-SG'|'en-ZA'|'en-GB'|'en-WL'|'fa-IR'|'fa-AF'|'fi-FI'|'fr-BE'|'fr-CA'|'ga-IE'|'gl-ES'|'ka-GE'|'de-AT'|'de-CH'|'el-GR'|'gu-IN'|'ht-HT'|'he-IL'|'hi-IN'|'hu-HU'|'is-IS'|'id-ID'|'jv-ID'|'km-KH'|'kn-IN'|'kk-KZ'|'lo-LA'|'lv-LV'|'lt-LT'|'mk-MK'|'ml-IN'|'mr-IN'|'ne-NP'|'no-NO'|'or-IN'|'ps-AF'|'pl-PL'|'pt-PT'|'pa-IN'|'ro-RO'|'ru-RU'|'sr-RS'|'si-LK'|'sk-SK'|'sl-SI'|'es-MX'|'es-US'|'su-ID'|'sw-BI'|'sw-KE'|'sw-RW'|'sw-TZ'|'sw-UG'|'sv-SE'|'tl-PH'|'ta-IN'|'te-IN'|'th-TH'|'tr-TR'|'uk-UA'|'uz-UZ'|'vi-VN'|'zu-ZA'|'my-MM'|'so-SO'|'yue-HK'|'et-EE'|'hmn'|'lg-UG'|'cy-GB'|'xh-ZA'|'bn-BD'|null,
     *     ContactInteractionType?: 'AGENT'|'AUTOMATED'|'CUSTOMER'|null,
     *     Tags?: array<string, string>|null,
     *     AIVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

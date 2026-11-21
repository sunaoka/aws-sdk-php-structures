<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en-US'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-WL'|'en-ZA'|'en-NZ'|'es-US'|'es-ES'|'es-MX'|'fr-FR'|'fr-CA'|'it-IT'|'de-DE'|'de-CH'|'ja-JP'|'pt-BR'|'pt-PT'|'zh-CN'|'zh-TW'|'zh-HK'|'ko-KR'|null $LanguageCode
 * @property float|null $DurationInSeconds
 */
class SyncLanguageCodeItem extends Shape
{
    /**
     * @param array{
     *     LanguageCode?: 'en-US'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-WL'|'en-ZA'|'en-NZ'|'es-US'|'es-ES'|'es-MX'|'fr-FR'|'fr-CA'|'it-IT'|'de-DE'|'de-CH'|'ja-JP'|'pt-BR'|'pt-PT'|'zh-CN'|'zh-TW'|'zh-HK'|'ko-KR'|null,
     *     DurationInSeconds?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

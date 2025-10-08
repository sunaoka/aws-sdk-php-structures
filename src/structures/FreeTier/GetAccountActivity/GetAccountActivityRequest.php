<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetAccountActivity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $activityId
 * @property 'en-US'|'en-GB'|'id-ID'|'de-DE'|'es-ES'|'fr-FR'|'ja-JP'|'it-IT'|'pt-PT'|'ko-KR'|'zh-CN'|'zh-TW'|'tr-TR'|null $languageCode
 */
class GetAccountActivityRequest extends Request
{
    /**
     * @param array{
     *     activityId: string,
     *     languageCode?: 'en-US'|'en-GB'|'id-ID'|'de-DE'|'es-ES'|'fr-FR'|'ja-JP'|'it-IT'|'pt-PT'|'ko-KR'|'zh-CN'|'zh-TW'|'tr-TR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

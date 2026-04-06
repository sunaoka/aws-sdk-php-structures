<?php

namespace Sunaoka\Aws\Structures\FreeTier\ListAccountActivities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|'EXPIRING'>|null $filterActivityStatuses
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 * @property 'en-US'|'en-GB'|'id-ID'|'de-DE'|'es-ES'|'fr-FR'|'ja-JP'|'it-IT'|'pt-PT'|'ko-KR'|'zh-CN'|'zh-TW'|'tr-TR'|null $languageCode
 */
class ListAccountActivitiesRequest extends Request
{
    /**
     * @param array{
     *     filterActivityStatuses?: list<'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|'EXPIRING'>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     languageCode?: 'en-US'|'en-GB'|'id-ID'|'de-DE'|'es-ES'|'fr-FR'|'ja-JP'|'it-IT'|'pt-PT'|'ko-KR'|'zh-CN'|'zh-TW'|'tr-TR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

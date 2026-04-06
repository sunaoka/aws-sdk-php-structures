<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'de_DE'|'en_CA'|'en_US'|'en_UK'|'es_ES'|'fr_CA'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'tr_TR'|'zh_CN'|'zh_TW'|null $locale
 * @property string|null $source
 * @property bool|null $includeChildEvents
 * @property string|null $aggregateNotificationEventArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $organizationalUnitId
 */
class ListNotificationEventsRequest extends Request
{
    /**
     * @param array{
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     locale?: 'de_DE'|'en_CA'|'en_US'|'en_UK'|'es_ES'|'fr_CA'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'tr_TR'|'zh_CN'|'zh_TW'|null,
     *     source?: string|null,
     *     includeChildEvents?: bool|null,
     *     aggregateNotificationEventArn?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     organizationalUnitId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

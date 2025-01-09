<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'de_DE'|'en_CA'|'en_US'|'en_UK'|'es_ES'|'fr_CA'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'tr_TR'|'zh_CN'|'zh_TW' $locale
 * @property string $source
 * @property bool $includeChildEvents
 * @property string $aggregateNotificationEventArn
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListNotificationEventsRequest extends Request
{
    /**
     * @param array{
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     locale?: 'de_DE'|'en_CA'|'en_US'|'en_UK'|'es_ES'|'fr_CA'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'tr_TR'|'zh_CN'|'zh_TW',
     *     source?: string,
     *     includeChildEvents?: bool,
     *     aggregateNotificationEventArn?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

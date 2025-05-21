<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationChildEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aggregateManagedNotificationEventArn
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'de_DE'|'en_CA'|'en_US'|'en_UK'|'es_ES'|'fr_CA'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'tr_TR'|'zh_CN'|'zh_TW'|null $locale
 * @property int<1, 100>|null $maxResults
 * @property string|null $relatedAccount
 * @property string|null $organizationalUnitId
 * @property string|null $nextToken
 */
class ListManagedNotificationChildEventsRequest extends Request
{
    /**
     * @param array{
     *     aggregateManagedNotificationEventArn: string,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     locale?: 'de_DE'|'en_CA'|'en_US'|'en_UK'|'es_ES'|'fr_CA'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'tr_TR'|'zh_CN'|'zh_TW'|null,
     *     maxResults?: int<1, 100>|null,
     *     relatedAccount?: string|null,
     *     organizationalUnitId?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

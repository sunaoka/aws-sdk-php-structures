<?php

namespace Sunaoka\Aws\Structures\Connect\SearchNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $InstanceId
 * @property array<'en_US'|'de_DE'|'es_ES'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'zh_CN'|'zh_TW', string>|null $Content
 * @property 'URGENT'|'HIGH'|'LOW'|null $Priority
 * @property list<string>|null $Recipients
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property string|null $LastModifiedRegion
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property array<string, string>|null $Tags
 */
class NotificationSearchSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     InstanceId?: string|null,
     *     Content?: array<'en_US'|'de_DE'|'es_ES'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'zh_CN'|'zh_TW', string>|null,
     *     Priority?: 'URGENT'|'HIGH'|'LOW'|null,
     *     Recipients?: list<string>|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

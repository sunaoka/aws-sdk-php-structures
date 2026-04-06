<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'en_US'|'de_DE'|'es_ES'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'zh_CN'|'zh_TW', string>|null $Content
 * @property string $Id
 * @property string $Arn
 * @property 'URGENT'|'HIGH'|'LOW'|null $Priority
 * @property list<string>|null $Recipients
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property string|null $LastModifiedRegion
 * @property array<string, string>|null $Tags
 */
class Notification extends Shape
{
    /**
     * @param array{
     *     Content?: array<'en_US'|'de_DE'|'es_ES'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'zh_CN'|'zh_TW', string>|null,
     *     Id: string,
     *     Arn: string,
     *     Priority?: 'URGENT'|'HIGH'|'LOW'|null,
     *     Recipients?: list<string>|null,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

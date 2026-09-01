<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListSegmentSubscriptionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProfileId
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property 'LIVE'|'SCHEDULE'|null $EventType
 * @property 'JOINED'|'LEFT'|null $Event
 */
class SubscriptionEventItem extends Shape
{
    /**
     * @param array{
     *     ProfileId?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     EventType?: 'LIVE'|'SCHEDULE'|null,
     *     Event?: 'JOINED'|'LEFT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

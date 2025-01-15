<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListEventTriggers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ObjectTypeName
 * @property string|null $EventTriggerName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property array<string, string>|null $Tags
 */
class EventTriggerSummaryItem extends Shape
{
    /**
     * @param array{
     *     ObjectTypeName?: string|null,
     *     EventTriggerName?: string|null,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

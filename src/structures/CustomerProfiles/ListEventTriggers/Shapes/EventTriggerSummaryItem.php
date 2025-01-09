<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListEventTriggers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectTypeName
 * @property string $EventTriggerName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string> $Tags
 */
class EventTriggerSummaryItem extends Shape
{
    /**
     * @param array{
     *     ObjectTypeName?: string,
     *     EventTriggerName?: string,
     *     Description?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

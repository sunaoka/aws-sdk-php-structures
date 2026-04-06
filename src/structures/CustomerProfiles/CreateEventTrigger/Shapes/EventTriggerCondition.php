<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateEventTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EventTriggerDimension> $EventTriggerDimensions
 * @property 'ANY'|'ALL'|'NONE' $LogicalOperator
 */
class EventTriggerCondition extends Shape
{
    /**
     * @param array{
     *     EventTriggerDimensions: list<EventTriggerDimension>,
     *     LogicalOperator: 'ANY'|'ALL'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

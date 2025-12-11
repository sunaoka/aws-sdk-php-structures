<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEventSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccountId'|'ResourceType'|'EventType'|'EventStatus' $name
 * @property list<string> $values
 */
class AutomationEventFilter extends Shape
{
    /**
     * @param array{
     *     name: 'AccountId'|'ResourceType'|'EventType'|'EventStatus',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

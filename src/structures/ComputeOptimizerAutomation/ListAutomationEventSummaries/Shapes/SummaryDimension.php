<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEventSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EventStatus' $key
 * @property string $value
 */
class SummaryDimension extends Shape
{
    /**
     * @param array{
     *     key: 'EventStatus',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

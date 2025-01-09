<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property double $Value
 */
class WhatIfRangeScenario extends Shape
{
    /**
     * @param array{
     *     StartDate: \Aws\Api\DateTimeResult,
     *     EndDate: \Aws\Api\DateTimeResult,
     *     Value: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Date
 * @property double $Value
 */
class WhatIfPointScenario extends Shape
{
    /**
     * @param array{
     *     Date: \Aws\Api\DateTimeResult,
     *     Value: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

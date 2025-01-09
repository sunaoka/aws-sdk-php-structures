<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $earliestScanStartTime
 * @property \Aws\Api\DateTimeResult $latestScanStartTime
 */
class CisDateFilter extends Shape
{
    /**
     * @param array{
     *     earliestScanStartTime?: \Aws\Api\DateTimeResult,
     *     latestScanStartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $earliestScanStartTime
 * @property \Aws\Api\DateTimeResult|null $latestScanStartTime
 */
class CisDateFilter extends Shape
{
    /**
     * @param array{
     *     earliestScanStartTime?: \Aws\Api\DateTimeResult|null,
     *     latestScanStartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

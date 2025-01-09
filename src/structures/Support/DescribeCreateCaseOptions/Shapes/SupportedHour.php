<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCreateCaseOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $startTime
 * @property string $endTime
 */
class SupportedHour extends Shape
{
    /**
     * @param array{
     *     startTime?: string,
     *     endTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $unlimited
 * @property int<1, max>|null $numberOfDays
 */
class RetentionPeriod extends Shape
{
    /**
     * @param array{
     *     unlimited?: bool|null,
     *     numberOfDays?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

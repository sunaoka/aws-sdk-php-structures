<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $unlimited
 * @property int<1, max> $numberOfDays
 */
class RetentionPeriod extends Shape
{
    /**
     * @param array{
     *     unlimited?: bool,
     *     numberOfDays?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

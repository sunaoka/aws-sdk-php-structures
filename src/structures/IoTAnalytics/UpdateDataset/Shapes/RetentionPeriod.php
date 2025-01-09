<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $unlimited
 * @property int $numberOfDays
 */
class RetentionPeriod extends Shape
{
    /**
     * @param array{
     *     unlimited?: bool,
     *     numberOfDays?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

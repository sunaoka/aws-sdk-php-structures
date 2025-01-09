<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $SampleCount
 * @property double $Sum
 * @property double $Minimum
 * @property double $Maximum
 */
class StatisticSet extends Shape
{
    /**
     * @param array{
     *     SampleCount: double,
     *     Sum: double,
     *     Minimum: double,
     *     Maximum: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

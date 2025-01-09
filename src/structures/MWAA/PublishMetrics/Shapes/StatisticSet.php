<?php

namespace Sunaoka\Aws\Structures\MWAA\PublishMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SampleCount
 * @property double $Sum
 * @property double $Minimum
 * @property double $Maximum
 */
class StatisticSet extends Shape
{
    /**
     * @param array{
     *     SampleCount?: int,
     *     Sum?: double,
     *     Minimum?: double,
     *     Maximum?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

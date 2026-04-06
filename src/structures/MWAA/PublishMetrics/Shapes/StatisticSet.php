<?php

namespace Sunaoka\Aws\Structures\MWAA\PublishMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Maximum
 * @property double|null $Minimum
 * @property int|null $SampleCount
 * @property double|null $Sum
 */
class StatisticSet extends Shape
{
    /**
     * @param array{
     *     Maximum?: double|null,
     *     Minimum?: double|null,
     *     SampleCount?: int|null,
     *     Sum?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

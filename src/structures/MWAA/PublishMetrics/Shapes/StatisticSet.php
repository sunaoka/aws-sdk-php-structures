<?php

namespace Sunaoka\Aws\Structures\MWAA\PublishMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $SampleCount
 * @property double|null $Sum
 * @property double|null $Minimum
 * @property double|null $Maximum
 */
class StatisticSet extends Shape
{
    /**
     * @param array{
     *     SampleCount?: int|null,
     *     Sum?: double|null,
     *     Minimum?: double|null,
     *     Maximum?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

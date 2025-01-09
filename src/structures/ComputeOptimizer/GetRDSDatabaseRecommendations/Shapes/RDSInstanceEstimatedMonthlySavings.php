<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD'|'CNY' $currency
 * @property double $value
 */
class RDSInstanceEstimatedMonthlySavings extends Shape
{
    /**
     * @param array{
     *     currency?: 'USD'|'CNY',
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

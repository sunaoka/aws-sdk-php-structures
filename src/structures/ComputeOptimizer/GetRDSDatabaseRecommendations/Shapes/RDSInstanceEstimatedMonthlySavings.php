<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD'|'CNY'|null $currency
 * @property double|null $value
 */
class RDSInstanceEstimatedMonthlySavings extends Shape
{
    /**
     * @param array{
     *     currency?: 'USD'|'CNY'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Duration'|'Memory' $name
 * @property 'Maximum'|'Average' $statistic
 * @property double $value
 */
class LambdaFunctionUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'Duration'|'Memory',
     *     statistic?: 'Maximum'|'Average',
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

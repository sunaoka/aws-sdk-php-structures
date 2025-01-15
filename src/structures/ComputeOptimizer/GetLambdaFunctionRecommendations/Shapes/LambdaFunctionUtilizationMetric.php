<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Duration'|'Memory'|null $name
 * @property 'Maximum'|'Average'|null $statistic
 * @property double|null $value
 */
class LambdaFunctionUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'Duration'|'Memory'|null,
     *     statistic?: 'Maximum'|'Average'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

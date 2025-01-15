<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Duration'|null $name
 * @property 'LowerBound'|'UpperBound'|'Expected'|null $statistic
 * @property double|null $value
 */
class LambdaFunctionMemoryProjectedMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'Duration'|null,
     *     statistic?: 'LowerBound'|'UpperBound'|'Expected'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

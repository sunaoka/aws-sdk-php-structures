<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Duration' $name
 * @property 'LowerBound'|'UpperBound'|'Expected' $statistic
 * @property double $value
 */
class LambdaFunctionMemoryProjectedMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'Duration',
     *     statistic?: 'LowerBound'|'UpperBound'|'Expected',
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

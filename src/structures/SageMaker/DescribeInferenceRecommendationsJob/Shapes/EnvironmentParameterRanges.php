<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CategoricalParameter> $CategoricalParameterRanges
 */
class EnvironmentParameterRanges extends Shape
{
    /**
     * @param array{CategoricalParameterRanges?: list<CategoricalParameter>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

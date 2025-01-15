<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CategoricalParameter>|null $CategoricalParameterRanges
 */
class EnvironmentParameterRanges extends Shape
{
    /**
     * @param array{CategoricalParameterRanges?: list<CategoricalParameter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

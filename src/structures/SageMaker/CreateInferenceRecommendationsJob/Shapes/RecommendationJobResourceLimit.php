<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $MaxNumberOfTests
 * @property int<1, max> $MaxParallelOfTests
 */
class RecommendationJobResourceLimit extends Shape
{
    /**
     * @param array{
     *     MaxNumberOfTests?: int<1, max>,
     *     MaxParallelOfTests?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

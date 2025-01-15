<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $MaxNumberOfTests
 * @property int<1, max>|null $MaxParallelOfTests
 */
class RecommendationJobResourceLimit extends Shape
{
    /**
     * @param array{
     *     MaxNumberOfTests?: int<1, max>|null,
     *     MaxParallelOfTests?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

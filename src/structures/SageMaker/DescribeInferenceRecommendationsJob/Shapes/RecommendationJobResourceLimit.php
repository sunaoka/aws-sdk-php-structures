<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxNumberOfTests
 * @property int $MaxParallelOfTests
 */
class RecommendationJobResourceLimit extends Shape
{
    /**
     * @param array{
     *     MaxNumberOfTests?: int,
     *     MaxParallelOfTests?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

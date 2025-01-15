<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Finding'|'FindingReasonCodes'|'RecommendationSourceType'|'InferredWorkloadTypes'|null $name
 * @property list<string>|null $values
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     name?: 'Finding'|'FindingReasonCodes'|'RecommendationSourceType'|'InferredWorkloadTypes'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Finding'|'FindingReasonCodes'|'RecommendationSourceType'|'InferredWorkloadTypes' $name
 * @property list<string> $values
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     name?: 'Finding'|'FindingReasonCodes'|'RecommendationSourceType'|'InferredWorkloadTypes',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

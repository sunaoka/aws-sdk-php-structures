<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetCostEstimation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormationCostEstimationResourceCollectionFilter $CloudFormation
 * @property list<TagCostEstimationResourceCollectionFilter> $Tags
 */
class CostEstimationResourceCollectionFilter extends Shape
{
    /**
     * @param array{
     *     CloudFormation?: CloudFormationCostEstimationResourceCollectionFilter,
     *     Tags?: list<TagCostEstimationResourceCollectionFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

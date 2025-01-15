<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\StartCostEstimation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormationCostEstimationResourceCollectionFilter|null $CloudFormation
 * @property list<TagCostEstimationResourceCollectionFilter>|null $Tags
 */
class CostEstimationResourceCollectionFilter extends Shape
{
    /**
     * @param array{
     *     CloudFormation?: CloudFormationCostEstimationResourceCollectionFilter|null,
     *     Tags?: list<TagCostEstimationResourceCollectionFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AllowedValuesConstraint|null $scoringStrategy
 * @property ResourceConstraints|null $resources
 */
class ScoringStrategyConstraints extends Shape
{
    /**
     * @param array{
     *     scoringStrategy?: AllowedValuesConstraint|null,
     *     resources?: ResourceConstraints|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

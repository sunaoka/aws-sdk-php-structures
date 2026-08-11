<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScoringStrategy|null $defaultValue
 * @property ScoringStrategyConstraints|null $constraints
 */
class ScoringStrategyConfig extends Shape
{
    /**
     * @param array{
     *     defaultValue?: ScoringStrategy|null,
     *     constraints?: ScoringStrategyConstraints|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

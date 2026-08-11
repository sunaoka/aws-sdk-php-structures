<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScoringStrategyConfig|null $scoringStrategy
 */
class NodeResourcesFitVersionConfig extends Shape
{
    /**
     * @param array{scoringStrategy?: ScoringStrategyConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScoringStrategy|null $scoringStrategy
 */
class NodeResourcesFitConfig extends Shape
{
    /**
     * @param array{scoringStrategy?: ScoringStrategy|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

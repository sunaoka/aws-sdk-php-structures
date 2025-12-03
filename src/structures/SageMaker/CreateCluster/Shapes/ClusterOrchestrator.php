<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterOrchestratorEksConfig|null $Eks
 */
class ClusterOrchestrator extends Shape
{
    /**
     * @param array{Eks?: ClusterOrchestratorEksConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

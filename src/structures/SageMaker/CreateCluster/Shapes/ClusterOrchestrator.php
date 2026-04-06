<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterOrchestratorEksConfig|null $Eks
 * @property ClusterOrchestratorSlurmConfig|null $Slurm
 */
class ClusterOrchestrator extends Shape
{
    /**
     * @param array{
     *     Eks?: ClusterOrchestratorEksConfig|null,
     *     Slurm?: ClusterOrchestratorSlurmConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

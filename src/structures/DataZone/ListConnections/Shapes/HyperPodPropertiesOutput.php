<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clusterArn
 * @property string $clusterName
 * @property 'EKS'|'SLURM'|null $orchestrator
 */
class HyperPodPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     clusterArn?: string|null,
     *     clusterName: string,
     *     orchestrator?: 'EKS'|'SLURM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

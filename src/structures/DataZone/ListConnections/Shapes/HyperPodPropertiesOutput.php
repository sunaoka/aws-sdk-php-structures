<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterName
 * @property string|null $clusterArn
 * @property 'EKS'|'SLURM'|null $orchestrator
 */
class HyperPodPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     clusterName: string,
     *     clusterArn?: string|null,
     *     orchestrator?: 'EKS'|'SLURM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

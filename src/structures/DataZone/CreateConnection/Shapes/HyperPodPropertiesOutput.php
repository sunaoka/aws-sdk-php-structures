<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterArn
 * @property string $clusterName
 * @property 'EKS'|'SLURM' $orchestrator
 */
class HyperPodPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     clusterArn?: string,
     *     clusterName: string,
     *     orchestrator?: 'EKS'|'SLURM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

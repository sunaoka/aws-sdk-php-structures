<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Controller'|'Login'|'Compute' $NodeType
 * @property list<string>|null $PartitionNames
 */
class ClusterSlurmConfig extends Shape
{
    /**
     * @param array{
     *     NodeType: 'Controller'|'Login'|'Compute',
     *     PartitionNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

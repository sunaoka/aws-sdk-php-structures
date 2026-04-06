<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Overwrite'|'Managed'|'Merge'|null $SlurmConfigStrategy
 */
class ClusterOrchestratorSlurmConfig extends Shape
{
    /**
     * @param array{SlurmConfigStrategy?: 'Overwrite'|'Managed'|'Merge'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PCS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SLURM' $type
 * @property string $version
 */
class Scheduler extends Shape
{
    /**
     * @param array{
     *     type: 'SLURM',
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PCS\RegisterComputeNodeGroupInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SLURMCTLD'|'SLURMDBD' $type
 * @property string $privateIpAddress
 * @property string|null $publicIpAddress
 * @property string $port
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     type: 'SLURMCTLD'|'SLURMDBD',
     *     privateIpAddress: string,
     *     publicIpAddress?: string|null,
     *     port: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

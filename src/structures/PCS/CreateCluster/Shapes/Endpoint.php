<?php

namespace Sunaoka\Aws\Structures\PCS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SLURMCTLD'|'SLURMDBD'|'SLURMRESTD' $type
 * @property string $privateIpAddress
 * @property string|null $publicIpAddress
 * @property string|null $ipv6Address
 * @property string $port
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     type: 'SLURMCTLD'|'SLURMDBD'|'SLURMRESTD',
     *     privateIpAddress: string,
     *     publicIpAddress?: string|null,
     *     ipv6Address?: string|null,
     *     port: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

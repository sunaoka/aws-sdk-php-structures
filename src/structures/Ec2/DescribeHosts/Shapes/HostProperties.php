<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Cores
 * @property string $InstanceType
 * @property string $InstanceFamily
 * @property int $Sockets
 * @property int $TotalVCpus
 */
class HostProperties extends Shape
{
    /**
     * @param array{
     *     Cores?: int,
     *     InstanceType?: string,
     *     InstanceFamily?: string,
     *     Sockets?: int,
     *     TotalVCpus?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

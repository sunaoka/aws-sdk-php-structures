<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Cores
 * @property string|null $InstanceType
 * @property string|null $InstanceFamily
 * @property int|null $Sockets
 * @property int|null $TotalVCpus
 */
class HostProperties extends Shape
{
    /**
     * @param array{
     *     Cores?: int|null,
     *     InstanceType?: string|null,
     *     InstanceFamily?: string|null,
     *     Sockets?: int|null,
     *     TotalVCpus?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

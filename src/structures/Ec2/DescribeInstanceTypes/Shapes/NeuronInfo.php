<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NeuronDeviceInfo> $NeuronDevices
 * @property int $TotalNeuronDeviceMemoryInMiB
 */
class NeuronInfo extends Shape
{
    /**
     * @param array{
     *     NeuronDevices?: list<NeuronDeviceInfo>,
     *     TotalNeuronDeviceMemoryInMiB?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

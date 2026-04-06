<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NeuronDeviceInfo>|null $NeuronDevices
 * @property int|null $TotalNeuronDeviceMemoryInMiB
 */
class NeuronInfo extends Shape
{
    /**
     * @param array{
     *     NeuronDevices?: list<NeuronDeviceInfo>|null,
     *     TotalNeuronDeviceMemoryInMiB?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

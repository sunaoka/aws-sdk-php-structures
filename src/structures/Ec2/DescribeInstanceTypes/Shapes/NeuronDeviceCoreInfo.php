<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property int $Version
 */
class NeuronDeviceCoreInfo extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     Version?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

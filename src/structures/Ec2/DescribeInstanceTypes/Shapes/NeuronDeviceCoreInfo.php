<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Count
 * @property int|null $Version
 */
class NeuronDeviceCoreInfo extends Shape
{
    /**
     * @param array{
     *     Count?: int|null,
     *     Version?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CoreCount
 * @property int $ThreadsPerCore
 * @property 'enabled'|'disabled' $AmdSevSnp
 */
class CpuOptions extends Shape
{
    /**
     * @param array{
     *     CoreCount?: int,
     *     ThreadsPerCore?: int,
     *     AmdSevSnp?: 'enabled'|'disabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

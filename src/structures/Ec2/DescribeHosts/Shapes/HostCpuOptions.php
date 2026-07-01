<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabled'|'disabled'|null $AmdSevSnp
 */
class HostCpuOptions extends Shape
{
    /**
     * @param array{AmdSevSnp?: 'enabled'|'disabled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

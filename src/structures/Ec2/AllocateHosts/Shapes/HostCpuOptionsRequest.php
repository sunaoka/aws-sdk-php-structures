<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabled'|'disabled'|null $AmdSevSnp
 */
class HostCpuOptionsRequest extends Shape
{
    /**
     * @param array{AmdSevSnp?: 'enabled'|'disabled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $nestedVirtualization
 */
class CpuOptions extends Shape
{
    /**
     * @param array{nestedVirtualization?: 'ENABLED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

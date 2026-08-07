<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedInstanceTypes
 */
class InstanceRequirements extends Shape
{
    /**
     * @param array{allowedInstanceTypes: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

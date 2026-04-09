<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomDescriptor|null $optionalValue
 */
class UpdatedCustomDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: CustomDescriptor|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

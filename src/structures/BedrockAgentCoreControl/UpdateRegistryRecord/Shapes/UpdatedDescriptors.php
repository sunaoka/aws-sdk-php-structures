<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedDescriptorsUnion|null $optionalValue
 */
class UpdatedDescriptors extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedDescriptorsUnion|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

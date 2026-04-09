<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SynchronizationConfiguration|null $optionalValue
 */
class UpdatedSynchronizationConfiguration extends Shape
{
    /**
     * @param array{optionalValue?: SynchronizationConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

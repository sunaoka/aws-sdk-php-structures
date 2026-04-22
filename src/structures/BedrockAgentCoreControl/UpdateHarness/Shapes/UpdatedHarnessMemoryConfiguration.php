<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessMemoryConfiguration|null $optionalValue
 */
class UpdatedHarnessMemoryConfiguration extends Shape
{
    /**
     * @param array{optionalValue?: HarnessMemoryConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

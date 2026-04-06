<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $optionalValue
 */
class UpdatedDescription extends Shape
{
    /**
     * @param array{optionalValue?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

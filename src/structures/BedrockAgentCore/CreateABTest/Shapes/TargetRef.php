<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreateABTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 */
class TargetRef extends Shape
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

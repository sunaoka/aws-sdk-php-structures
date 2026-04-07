<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $x
 * @property int $y
 */
class MouseMoveArguments extends Shape
{
    /**
     * @param array{
     *     x: int,
     *     y: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

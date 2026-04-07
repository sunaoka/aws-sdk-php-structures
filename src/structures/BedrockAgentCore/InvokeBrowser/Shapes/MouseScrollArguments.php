<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $x
 * @property int $y
 * @property int<-1000, 1000>|null $deltaX
 * @property int<-1000, 1000>|null $deltaY
 */
class MouseScrollArguments extends Shape
{
    /**
     * @param array{
     *     x: int,
     *     y: int,
     *     deltaX?: int<-1000, 1000>|null,
     *     deltaY?: int<-1000, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

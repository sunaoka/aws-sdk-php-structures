<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $x
 * @property int $y
 * @property 'LEFT'|'RIGHT'|'MIDDLE'|null $button
 * @property int<1, 10>|null $clickCount
 */
class MouseClickArguments extends Shape
{
    /**
     * @param array{
     *     x: int,
     *     y: int,
     *     button?: 'LEFT'|'RIGHT'|'MIDDLE'|null,
     *     clickCount?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

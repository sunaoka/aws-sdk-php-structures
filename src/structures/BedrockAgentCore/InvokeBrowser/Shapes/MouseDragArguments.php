<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $endX
 * @property int $endY
 * @property int $startX
 * @property int $startY
 * @property 'LEFT'|'RIGHT'|'MIDDLE'|null $button
 */
class MouseDragArguments extends Shape
{
    /**
     * @param array{
     *     endX: int,
     *     endY: int,
     *     startX: int,
     *     startY: int,
     *     button?: 'LEFT'|'RIGHT'|'MIDDLE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VisualMenuOption $VisualMenuOption
 * @property ContextMenuOption $ContextMenuOption
 */
class VisualInteractionOptions extends Shape
{
    /**
     * @param array{
     *     VisualMenuOption?: VisualMenuOption,
     *     ContextMenuOption?: ContextMenuOption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

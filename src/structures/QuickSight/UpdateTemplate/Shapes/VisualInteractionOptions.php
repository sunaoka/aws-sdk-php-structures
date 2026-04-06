<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VisualMenuOption|null $VisualMenuOption
 * @property ContextMenuOption|null $ContextMenuOption
 */
class VisualInteractionOptions extends Shape
{
    /**
     * @param array{
     *     VisualMenuOption?: VisualMenuOption|null,
     *     ContextMenuOption?: ContextMenuOption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageMenuOption|null $ImageMenuOption
 */
class ImageInteractionOptions extends Shape
{
    /**
     * @param array{ImageMenuOption?: ImageMenuOption|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

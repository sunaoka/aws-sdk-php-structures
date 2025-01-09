<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageMenuOption $ImageMenuOption
 */
class ImageInteractionOptions extends Shape
{
    /**
     * @param array{ImageMenuOption?: ImageMenuOption} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

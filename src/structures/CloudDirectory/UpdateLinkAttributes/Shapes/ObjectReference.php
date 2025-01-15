<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateLinkAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Selector
 */
class ObjectReference extends Shape
{
    /**
     * @param array{Selector?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

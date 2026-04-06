<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\GetControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class ControlParameter extends Shape
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

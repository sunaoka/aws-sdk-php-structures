<?php

namespace Sunaoka\Aws\Structures\Textract\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $State
 */
class BoundingBoxConfiguration extends Shape
{
    /**
     * @param array{State: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

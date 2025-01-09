<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\GetControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 */
class ImplementationDetails extends Shape
{
    /**
     * @param array{Type: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

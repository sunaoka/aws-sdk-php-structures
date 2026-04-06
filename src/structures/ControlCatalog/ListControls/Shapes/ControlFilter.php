<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImplementationFilter|null $Implementations
 */
class ControlFilter extends Shape
{
    /**
     * @param array{Implementations?: ImplementationFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceDimensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Identifier
 */
class DimensionDetail extends Shape
{
    /**
     * @param array{Identifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

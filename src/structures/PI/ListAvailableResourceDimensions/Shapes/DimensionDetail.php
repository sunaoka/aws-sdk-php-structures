<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceDimensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 */
class DimensionDetail extends Shape
{
    /**
     * @param array{Identifier?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

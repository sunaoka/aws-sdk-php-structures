<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DecimalPlaces
 */
class DecimalPlacesConfiguration extends Shape
{
    /**
     * @param array{DecimalPlaces: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

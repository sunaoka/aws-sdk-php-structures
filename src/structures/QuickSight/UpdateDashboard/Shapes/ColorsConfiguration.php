<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CustomColor> $CustomColors
 */
class ColorsConfiguration extends Shape
{
    /**
     * @param array{CustomColors?: list<CustomColor>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

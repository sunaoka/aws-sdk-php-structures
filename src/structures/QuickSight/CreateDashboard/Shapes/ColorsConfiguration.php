<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CustomColor>|null $CustomColors
 */
class ColorsConfiguration extends Shape
{
    /**
     * @param array{CustomColors?: list<CustomColor>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

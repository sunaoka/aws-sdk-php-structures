<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMMA'|'DOT'|'SPACE' $Symbol
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 */
class ThousandSeparatorOptions extends Shape
{
    /**
     * @param array{
     *     Symbol?: 'COMMA'|'DOT'|'SPACE',
     *     Visibility?: 'HIDDEN'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

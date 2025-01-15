<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMMA'|'DOT'|'SPACE'|null $Symbol
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 */
class ThousandSeparatorOptions extends Shape
{
    /**
     * @param array{
     *     Symbol?: 'COMMA'|'DOT'|'SPACE'|null,
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

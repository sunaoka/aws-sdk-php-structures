<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Font> $FontFamilies
 */
class Typography extends Shape
{
    /**
     * @param array{FontFamilies?: list<Font>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

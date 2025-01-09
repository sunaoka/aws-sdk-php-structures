<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NORMAL'|'BOLD' $Name
 */
class FontWeight extends Shape
{
    /**
     * @param array{Name?: 'NORMAL'|'BOLD'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

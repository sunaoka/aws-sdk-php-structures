<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLASSIC'|'VERTICAL' $Type
 */
class KPIVisualStandardLayout extends Shape
{
    /**
     * @param array{Type: 'CLASSIC'|'VERTICAL'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

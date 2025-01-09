<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 */
class SecondaryValueOptions extends Shape
{
    /**
     * @param array{Visibility?: 'HIDDEN'|'VISIBLE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

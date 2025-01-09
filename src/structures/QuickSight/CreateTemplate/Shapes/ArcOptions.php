<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SMALL'|'MEDIUM'|'LARGE'|'WHOLE' $ArcThickness
 */
class ArcOptions extends Shape
{
    /**
     * @param array{ArcThickness?: 'SMALL'|'MEDIUM'|'LARGE'|'WHOLE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

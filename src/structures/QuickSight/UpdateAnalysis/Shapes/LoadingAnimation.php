<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 */
class LoadingAnimation extends Shape
{
    /**
     * @param array{Visibility?: 'HIDDEN'|'VISIBLE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 */
class TextControlPlaceholderOptions extends Shape
{
    /**
     * @param array{Visibility?: 'HIDDEN'|'VISIBLE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

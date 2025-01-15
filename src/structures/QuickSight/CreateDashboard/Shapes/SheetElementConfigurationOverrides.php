<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 */
class SheetElementConfigurationOverrides extends Shape
{
    /**
     * @param array{Visibility?: 'HIDDEN'|'VISIBLE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

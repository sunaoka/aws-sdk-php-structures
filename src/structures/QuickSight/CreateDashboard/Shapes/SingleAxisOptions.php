<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property YAxisOptions $YAxisOptions
 */
class SingleAxisOptions extends Shape
{
    /**
     * @param array{YAxisOptions?: YAxisOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

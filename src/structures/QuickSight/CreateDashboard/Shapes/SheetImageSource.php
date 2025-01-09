<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SheetImageStaticFileSource $SheetImageStaticFileSource
 */
class SheetImageSource extends Shape
{
    /**
     * @param array{SheetImageStaticFileSource?: SheetImageStaticFileSource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

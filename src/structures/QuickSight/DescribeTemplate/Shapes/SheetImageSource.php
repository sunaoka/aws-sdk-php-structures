<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SheetImageStaticFileSource|null $SheetImageStaticFileSource
 */
class SheetImageSource extends Shape
{
    /**
     * @param array{SheetImageStaticFileSource?: SheetImageStaticFileSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

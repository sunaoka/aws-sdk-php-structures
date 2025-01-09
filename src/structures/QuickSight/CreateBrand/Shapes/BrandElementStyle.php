<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NavbarStyle $NavbarStyle
 */
class BrandElementStyle extends Shape
{
    /**
     * @param array{NavbarStyle?: NavbarStyle} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

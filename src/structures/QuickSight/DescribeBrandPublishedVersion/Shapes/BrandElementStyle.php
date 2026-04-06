<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandPublishedVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NavbarStyle|null $NavbarStyle
 */
class BrandElementStyle extends Shape
{
    /**
     * @param array{NavbarStyle?: NavbarStyle|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

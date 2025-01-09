<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Palette $GlobalNavbar
 * @property Palette $ContextualNavbar
 */
class NavbarStyle extends Shape
{
    /**
     * @param array{
     *     GlobalNavbar?: Palette,
     *     ContextualNavbar?: Palette
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

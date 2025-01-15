<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Palette|null $GlobalNavbar
 * @property Palette|null $ContextualNavbar
 */
class NavbarStyle extends Shape
{
    /**
     * @param array{
     *     GlobalNavbar?: Palette|null,
     *     ContextualNavbar?: Palette|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

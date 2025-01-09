<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BrandColorPalette $BrandColorPalette
 * @property BrandElementStyle $BrandElementStyle
 */
class ApplicationTheme extends Shape
{
    /**
     * @param array{
     *     BrandColorPalette?: BrandColorPalette,
     *     BrandElementStyle?: BrandElementStyle
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

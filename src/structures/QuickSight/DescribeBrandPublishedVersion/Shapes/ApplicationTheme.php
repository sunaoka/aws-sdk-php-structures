<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandPublishedVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BrandColorPalette|null $BrandColorPalette
 * @property BrandElementStyle|null $BrandElementStyle
 */
class ApplicationTheme extends Shape
{
    /**
     * @param array{
     *     BrandColorPalette?: BrandColorPalette|null,
     *     BrandElementStyle?: BrandElementStyle|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

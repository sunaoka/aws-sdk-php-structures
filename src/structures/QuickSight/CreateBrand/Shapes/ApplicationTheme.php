<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BrandColorPalette|null $BrandColorPalette
 * @property ContextualAccentPalette|null $ContextualAccentPalette
 * @property BrandElementStyle|null $BrandElementStyle
 */
class ApplicationTheme extends Shape
{
    /**
     * @param array{
     *     BrandColorPalette?: BrandColorPalette|null,
     *     ContextualAccentPalette?: ContextualAccentPalette|null,
     *     BrandElementStyle?: BrandElementStyle|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

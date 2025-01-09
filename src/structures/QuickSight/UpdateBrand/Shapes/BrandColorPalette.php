<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Palette $Primary
 * @property Palette $Secondary
 * @property Palette $Accent
 * @property Palette $Measure
 * @property Palette $Dimension
 * @property Palette $Success
 * @property Palette $Info
 * @property Palette $Warning
 * @property Palette $Danger
 */
class BrandColorPalette extends Shape
{
    /**
     * @param array{
     *     Primary?: Palette,
     *     Secondary?: Palette,
     *     Accent?: Palette,
     *     Measure?: Palette,
     *     Dimension?: Palette,
     *     Success?: Palette,
     *     Info?: Palette,
     *     Warning?: Palette,
     *     Danger?: Palette
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandPublishedVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Palette|null $Primary
 * @property Palette|null $Secondary
 * @property Palette|null $Accent
 * @property Palette|null $Measure
 * @property Palette|null $Dimension
 * @property Palette|null $Success
 * @property Palette|null $Info
 * @property Palette|null $Warning
 * @property Palette|null $Danger
 */
class BrandColorPalette extends Shape
{
    /**
     * @param array{
     *     Primary?: Palette|null,
     *     Secondary?: Palette|null,
     *     Accent?: Palette|null,
     *     Measure?: Palette|null,
     *     Dimension?: Palette|null,
     *     Success?: Palette|null,
     *     Info?: Palette|null,
     *     Warning?: Palette|null,
     *     Danger?: Palette|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

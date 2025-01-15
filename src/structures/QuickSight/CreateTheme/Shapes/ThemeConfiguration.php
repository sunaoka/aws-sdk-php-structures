<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataColorPalette|null $DataColorPalette
 * @property UIColorPalette|null $UIColorPalette
 * @property SheetStyle|null $Sheet
 * @property Typography|null $Typography
 */
class ThemeConfiguration extends Shape
{
    /**
     * @param array{
     *     DataColorPalette?: DataColorPalette|null,
     *     UIColorPalette?: UIColorPalette|null,
     *     Sheet?: SheetStyle|null,
     *     Typography?: Typography|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataColorPalette $DataColorPalette
 * @property UIColorPalette $UIColorPalette
 * @property SheetStyle $Sheet
 * @property Typography $Typography
 */
class ThemeConfiguration extends Shape
{
    /**
     * @param array{
     *     DataColorPalette?: DataColorPalette,
     *     UIColorPalette?: UIColorPalette,
     *     Sheet?: SheetStyle,
     *     Typography?: Typography
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

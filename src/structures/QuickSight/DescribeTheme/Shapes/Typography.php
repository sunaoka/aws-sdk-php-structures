<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Font>|null $FontFamilies
 * @property FontConfiguration|null $AxisTitleFontConfiguration
 * @property FontConfiguration|null $AxisLabelFontConfiguration
 * @property FontConfiguration|null $LegendTitleFontConfiguration
 * @property FontConfiguration|null $LegendValueFontConfiguration
 * @property FontConfiguration|null $DataLabelFontConfiguration
 * @property VisualTitleFontConfiguration|null $VisualTitleFontConfiguration
 * @property VisualSubtitleFontConfiguration|null $VisualSubtitleFontConfiguration
 */
class Typography extends Shape
{
    /**
     * @param array{
     *     FontFamilies?: list<Font>|null,
     *     AxisTitleFontConfiguration?: FontConfiguration|null,
     *     AxisLabelFontConfiguration?: FontConfiguration|null,
     *     LegendTitleFontConfiguration?: FontConfiguration|null,
     *     LegendValueFontConfiguration?: FontConfiguration|null,
     *     DataLabelFontConfiguration?: FontConfiguration|null,
     *     VisualTitleFontConfiguration?: VisualTitleFontConfiguration|null,
     *     VisualSubtitleFontConfiguration?: VisualSubtitleFontConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

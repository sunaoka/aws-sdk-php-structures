<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrimaryForeground
 * @property string|null $PrimaryBackground
 * @property string|null $SecondaryForeground
 * @property string|null $SecondaryBackground
 * @property string|null $Accent
 * @property string|null $AccentForeground
 * @property string|null $Danger
 * @property string|null $DangerForeground
 * @property string|null $Warning
 * @property string|null $WarningForeground
 * @property string|null $Success
 * @property string|null $SuccessForeground
 * @property string|null $Dimension
 * @property string|null $DimensionForeground
 * @property string|null $Measure
 * @property string|null $MeasureForeground
 */
class UIColorPalette extends Shape
{
    /**
     * @param array{
     *     PrimaryForeground?: string|null,
     *     PrimaryBackground?: string|null,
     *     SecondaryForeground?: string|null,
     *     SecondaryBackground?: string|null,
     *     Accent?: string|null,
     *     AccentForeground?: string|null,
     *     Danger?: string|null,
     *     DangerForeground?: string|null,
     *     Warning?: string|null,
     *     WarningForeground?: string|null,
     *     Success?: string|null,
     *     SuccessForeground?: string|null,
     *     Dimension?: string|null,
     *     DimensionForeground?: string|null,
     *     Measure?: string|null,
     *     MeasureForeground?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

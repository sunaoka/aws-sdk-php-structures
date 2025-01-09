<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryForeground
 * @property string $PrimaryBackground
 * @property string $SecondaryForeground
 * @property string $SecondaryBackground
 * @property string $Accent
 * @property string $AccentForeground
 * @property string $Danger
 * @property string $DangerForeground
 * @property string $Warning
 * @property string $WarningForeground
 * @property string $Success
 * @property string $SuccessForeground
 * @property string $Dimension
 * @property string $DimensionForeground
 * @property string $Measure
 * @property string $MeasureForeground
 */
class UIColorPalette extends Shape
{
    /**
     * @param array{
     *     PrimaryForeground?: string,
     *     PrimaryBackground?: string,
     *     SecondaryForeground?: string,
     *     SecondaryBackground?: string,
     *     Accent?: string,
     *     AccentForeground?: string,
     *     Danger?: string,
     *     DangerForeground?: string,
     *     Warning?: string,
     *     WarningForeground?: string,
     *     Success?: string,
     *     SuccessForeground?: string,
     *     Dimension?: string,
     *     DimensionForeground?: string,
     *     Measure?: string,
     *     MeasureForeground?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

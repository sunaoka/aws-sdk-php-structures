<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property ComboChartSeriesSettings|null $Settings
 */
class FieldComboSeriesItem extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Settings?: ComboChartSeriesSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

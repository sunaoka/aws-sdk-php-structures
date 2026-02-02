<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string|null $FieldValue
 * @property ComboChartSeriesSettings|null $Settings
 */
class DataFieldComboSeriesItem extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     FieldValue?: string|null,
     *     Settings?: ComboChartSeriesSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldComboSeriesItem|null $FieldComboSeriesItem
 * @property DataFieldComboSeriesItem|null $DataFieldComboSeriesItem
 */
class ComboSeriesItem extends Shape
{
    /**
     * @param array{
     *     FieldComboSeriesItem?: FieldComboSeriesItem|null,
     *     DataFieldComboSeriesItem?: DataFieldComboSeriesItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

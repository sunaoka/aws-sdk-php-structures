<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableAggregatedFieldWells $TableAggregatedFieldWells
 * @property TableUnaggregatedFieldWells $TableUnaggregatedFieldWells
 */
class TableFieldWells extends Shape
{
    /**
     * @param array{
     *     TableAggregatedFieldWells?: TableAggregatedFieldWells,
     *     TableUnaggregatedFieldWells?: TableUnaggregatedFieldWells
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

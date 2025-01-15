<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableAggregatedFieldWells|null $TableAggregatedFieldWells
 * @property TableUnaggregatedFieldWells|null $TableUnaggregatedFieldWells
 */
class TableFieldWells extends Shape
{
    /**
     * @param array{
     *     TableAggregatedFieldWells?: TableAggregatedFieldWells|null,
     *     TableUnaggregatedFieldWells?: TableUnaggregatedFieldWells|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

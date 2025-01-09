<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilledMapAggregatedFieldWells $FilledMapAggregatedFieldWells
 */
class FilledMapFieldWells extends Shape
{
    /**
     * @param array{FilledMapAggregatedFieldWells?: FilledMapAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

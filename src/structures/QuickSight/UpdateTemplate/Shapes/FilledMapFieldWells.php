<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilledMapAggregatedFieldWells|null $FilledMapAggregatedFieldWells
 */
class FilledMapFieldWells extends Shape
{
    /**
     * @param array{FilledMapAggregatedFieldWells?: FilledMapAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

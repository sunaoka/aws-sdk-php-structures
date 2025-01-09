<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergCompactionMetrics $IcebergMetrics
 */
class CompactionMetrics extends Shape
{
    /**
     * @param array{IcebergMetrics?: IcebergCompactionMetrics} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

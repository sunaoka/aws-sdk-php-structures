<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergCompactionMetrics|null $IcebergMetrics
 */
class CompactionMetrics extends Shape
{
    /**
     * @param array{IcebergMetrics?: IcebergCompactionMetrics|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

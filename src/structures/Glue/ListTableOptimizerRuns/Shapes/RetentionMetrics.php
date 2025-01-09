<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergRetentionMetrics $IcebergMetrics
 */
class RetentionMetrics extends Shape
{
    /**
     * @param array{IcebergMetrics?: IcebergRetentionMetrics} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

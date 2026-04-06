<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergRetentionMetrics|null $IcebergMetrics
 */
class RetentionMetrics extends Shape
{
    /**
     * @param array{IcebergMetrics?: IcebergRetentionMetrics|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

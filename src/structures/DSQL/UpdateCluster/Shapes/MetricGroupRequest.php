<?php

namespace Sunaoka\Aws\Structures\DSQL\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STATEMENT_STATISTICS' $metricGroup
 */
class MetricGroupRequest extends Shape
{
    /**
     * @param array{metricGroup: 'STATEMENT_STATISTICS'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

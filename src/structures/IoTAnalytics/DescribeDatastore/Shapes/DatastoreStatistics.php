<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EstimatedResourceSize $size
 */
class DatastoreStatistics extends Shape
{
    /**
     * @param array{size?: EstimatedResourceSize} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

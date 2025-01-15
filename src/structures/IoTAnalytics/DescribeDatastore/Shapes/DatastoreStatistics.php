<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EstimatedResourceSize|null $size
 */
class DatastoreStatistics extends Shape
{
    /**
     * @param array{size?: EstimatedResourceSize|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

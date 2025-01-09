<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $estimatedSizeInBytes
 * @property \Aws\Api\DateTimeResult $estimatedOn
 */
class EstimatedResourceSize extends Shape
{
    /**
     * @param array{
     *     estimatedSizeInBytes?: double,
     *     estimatedOn?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

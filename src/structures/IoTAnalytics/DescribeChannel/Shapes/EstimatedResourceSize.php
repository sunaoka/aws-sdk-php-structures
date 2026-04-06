<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $estimatedSizeInBytes
 * @property \Aws\Api\DateTimeResult|null $estimatedOn
 */
class EstimatedResourceSize extends Shape
{
    /**
     * @param array{
     *     estimatedSizeInBytes?: double|null,
     *     estimatedOn?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KinesisStreamSourceDescription $KinesisStreamSourceDescription
 * @property MSKSourceDescription $MSKSourceDescription
 * @property DatabaseSourceDescription $DatabaseSourceDescription
 */
class SourceDescription extends Shape
{
    /**
     * @param array{
     *     KinesisStreamSourceDescription?: KinesisStreamSourceDescription,
     *     MSKSourceDescription?: MSKSourceDescription,
     *     DatabaseSourceDescription?: DatabaseSourceDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

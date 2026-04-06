<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KinesisStreamSourceDescription|null $KinesisStreamSourceDescription
 * @property MSKSourceDescription|null $MSKSourceDescription
 */
class SourceDescription extends Shape
{
    /**
     * @param array{
     *     KinesisStreamSourceDescription?: KinesisStreamSourceDescription|null,
     *     MSKSourceDescription?: MSKSourceDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

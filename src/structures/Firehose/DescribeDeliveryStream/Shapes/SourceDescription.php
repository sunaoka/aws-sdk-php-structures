<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DirectPutSourceDescription|null $DirectPutSourceDescription
 * @property KinesisStreamSourceDescription|null $KinesisStreamSourceDescription
 * @property MSKSourceDescription|null $MSKSourceDescription
 * @property DatabaseSourceDescription|null $DatabaseSourceDescription
 */
class SourceDescription extends Shape
{
    /**
     * @param array{
     *     DirectPutSourceDescription?: DirectPutSourceDescription|null,
     *     KinesisStreamSourceDescription?: KinesisStreamSourceDescription|null,
     *     MSKSourceDescription?: MSKSourceDescription|null,
     *     DatabaseSourceDescription?: DatabaseSourceDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

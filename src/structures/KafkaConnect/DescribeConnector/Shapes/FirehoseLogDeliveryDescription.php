<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deliveryStream
 * @property bool|null $enabled
 */
class FirehoseLogDeliveryDescription extends Shape
{
    /**
     * @param array{
     *     deliveryStream?: string|null,
     *     enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

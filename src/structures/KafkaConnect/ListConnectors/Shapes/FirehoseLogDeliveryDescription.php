<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deliveryStream
 * @property bool $enabled
 */
class FirehoseLogDeliveryDescription extends Shape
{
    /**
     * @param array{
     *     deliveryStream?: string,
     *     enabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deliveryStream
 * @property bool $enabled
 */
class FirehoseLogDelivery extends Shape
{
    /**
     * @param array{
     *     deliveryStream?: string|null,
     *     enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

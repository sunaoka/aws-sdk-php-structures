<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeliveryStream
 * @property bool $Enabled
 */
class Firehose extends Shape
{
    /**
     * @param array{
     *     DeliveryStream?: string,
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

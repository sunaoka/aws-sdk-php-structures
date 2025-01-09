<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDeliveryDestinationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deliveryDestinationPolicy
 */
class Policy extends Shape
{
    /**
     * @param array{deliveryDestinationPolicy?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

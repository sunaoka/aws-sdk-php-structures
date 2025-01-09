<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDeliveryDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationResourceArn
 */
class DeliveryDestinationConfiguration extends Shape
{
    /**
     * @param array{destinationResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

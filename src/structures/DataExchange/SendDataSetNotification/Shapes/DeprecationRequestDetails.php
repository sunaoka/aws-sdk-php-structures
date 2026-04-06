<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $DeprecationAt
 */
class DeprecationRequestDetails extends Shape
{
    /**
     * @param array{DeprecationAt: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

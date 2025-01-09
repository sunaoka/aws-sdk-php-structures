<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddress
 */
class Ip extends Shape
{
    /**
     * @param array{IpAddress: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListMulticastGroupsByFuotaTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 */
class MulticastGroupByFuotaTask extends Shape
{
    /**
     * @param array{Id?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateMulticastGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 15>|null $DlDr
 * @property int<100000000, 1000000000>|null $DlFreq
 */
class DefaultSessionParametersMulticast extends Shape
{
    /**
     * @param array{
     *     DlDr?: int<0, 15>|null,
     *     DlFreq?: int<100000000, 1000000000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 503> $Pci
 * @property int<0, 262143> $Earfcn
 */
class LteLocalId extends Shape
{
    /**
     * @param array{
     *     Pci: int<0, 503>,
     *     Earfcn: int<0, 262143>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

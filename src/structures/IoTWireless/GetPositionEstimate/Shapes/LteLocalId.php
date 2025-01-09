<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Pci
 * @property int $Earfcn
 */
class LteLocalId extends Shape
{
    /**
     * @param array{
     *     Pci: int,
     *     Earfcn: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

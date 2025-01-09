<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 262143> $Earfcn
 * @property int<0, 503> $Pci
 */
class LteLocalId extends Shape
{
    /**
     * @param array{
     *     Earfcn: int<0, 262143>,
     *     Pci: int<0, 503>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

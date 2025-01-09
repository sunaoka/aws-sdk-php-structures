<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Earfcn
 * @property int $Pci
 */
class LteLocalId extends Shape
{
    /**
     * @param array{
     *     Earfcn: int,
     *     Pci: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

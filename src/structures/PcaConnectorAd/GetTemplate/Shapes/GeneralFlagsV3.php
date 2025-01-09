<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AutoEnrollment
 * @property bool $MachineType
 */
class GeneralFlagsV3 extends Shape
{
    /**
     * @param array{
     *     AutoEnrollment?: bool,
     *     MachineType?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

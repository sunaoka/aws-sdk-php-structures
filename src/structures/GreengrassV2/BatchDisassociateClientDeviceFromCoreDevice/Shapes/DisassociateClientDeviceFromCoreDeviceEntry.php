<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\BatchDisassociateClientDeviceFromCoreDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingName
 */
class DisassociateClientDeviceFromCoreDeviceEntry extends Shape
{
    /**
     * @param array{thingName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

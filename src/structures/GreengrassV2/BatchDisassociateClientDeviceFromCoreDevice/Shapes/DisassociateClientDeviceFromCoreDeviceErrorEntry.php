<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\BatchDisassociateClientDeviceFromCoreDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingName
 * @property string $code
 * @property string $message
 */
class DisassociateClientDeviceFromCoreDeviceErrorEntry extends Shape
{
    /**
     * @param array{
     *     thingName?: string,
     *     code?: string,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

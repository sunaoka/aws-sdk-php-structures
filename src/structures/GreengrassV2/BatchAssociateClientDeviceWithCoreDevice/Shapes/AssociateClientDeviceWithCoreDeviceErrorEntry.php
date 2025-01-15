<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\BatchAssociateClientDeviceWithCoreDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingName
 * @property string|null $code
 * @property string|null $message
 */
class AssociateClientDeviceWithCoreDeviceErrorEntry extends Shape
{
    /**
     * @param array{
     *     thingName?: string|null,
     *     code?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

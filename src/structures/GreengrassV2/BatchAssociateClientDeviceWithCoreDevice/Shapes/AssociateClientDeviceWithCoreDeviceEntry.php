<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\BatchAssociateClientDeviceWithCoreDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingName
 */
class AssociateClientDeviceWithCoreDeviceEntry extends Shape
{
    /**
     * @param array{thingName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

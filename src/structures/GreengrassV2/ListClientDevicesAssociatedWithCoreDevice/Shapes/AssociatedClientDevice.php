<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListClientDevicesAssociatedWithCoreDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingName
 * @property \Aws\Api\DateTimeResult|null $associationTimestamp
 */
class AssociatedClientDevice extends Shape
{
    /**
     * @param array{
     *     thingName?: string|null,
     *     associationTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

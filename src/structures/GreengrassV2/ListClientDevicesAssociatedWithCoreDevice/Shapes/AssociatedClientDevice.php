<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListClientDevicesAssociatedWithCoreDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingName
 * @property \Aws\Api\DateTimeResult $associationTimestamp
 */
class AssociatedClientDevice extends Shape
{
    /**
     * @param array{
     *     thingName?: string,
     *     associationTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

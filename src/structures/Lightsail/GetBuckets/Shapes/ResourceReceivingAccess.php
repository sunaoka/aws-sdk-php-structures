<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $resourceType
 */
class ResourceReceivingAccess extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     resourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

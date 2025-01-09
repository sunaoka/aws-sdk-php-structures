<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $resourceType
 */
class ResourceReceivingAccess extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     resourceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

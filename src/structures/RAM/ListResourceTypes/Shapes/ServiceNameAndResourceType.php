<?php

namespace Sunaoka\Aws\Structures\RAM\ListResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property string $serviceName
 * @property 'REGIONAL'|'GLOBAL' $resourceRegionScope
 */
class ServiceNameAndResourceType extends Shape
{
    /**
     * @param array{
     *     resourceType?: string,
     *     serviceName?: string,
     *     resourceRegionScope?: 'REGIONAL'|'GLOBAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\RAM\ListResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceType
 * @property string|null $serviceName
 * @property 'REGIONAL'|'GLOBAL'|null $resourceRegionScope
 */
class ServiceNameAndResourceType extends Shape
{
    /**
     * @param array{
     *     resourceType?: string|null,
     *     serviceName?: string|null,
     *     resourceRegionScope?: 'REGIONAL'|'GLOBAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

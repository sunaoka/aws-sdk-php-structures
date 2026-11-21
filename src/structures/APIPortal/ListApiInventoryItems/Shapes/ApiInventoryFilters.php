<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListApiInventoryItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_GATEWAY'|'ELB'|'CLOUDFRONT'|null $discoverySource
 * @property string|null $resourceArn
 */
class ApiInventoryFilters extends Shape
{
    /**
     * @param array{
     *     discoverySource?: 'API_GATEWAY'|'ELB'|'CLOUDFRONT'|null,
     *     resourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

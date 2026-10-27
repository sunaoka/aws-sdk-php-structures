<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListDestinationEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $RegionNames
 * @property list<'STANDARD'|'ROUTER_INPUT'>|null $DestinationTypes
 * @property list<string>|null $NameContains
 */
class DestinationEndpointFilter extends Shape
{
    /**
     * @param array{
     *     RegionNames?: list<string>|null,
     *     DestinationTypes?: list<'STANDARD'|'ROUTER_INPUT'>|null,
     *     NameContains?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

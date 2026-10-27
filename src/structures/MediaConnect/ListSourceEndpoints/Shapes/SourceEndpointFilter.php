<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListSourceEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $RegionNames
 * @property list<'STANDARD'|'ROUTER_OUTPUT'>|null $SourceTypes
 * @property list<string>|null $NameContains
 */
class SourceEndpointFilter extends Shape
{
    /**
     * @param array{
     *     RegionNames?: list<string>|null,
     *     SourceTypes?: list<'STANDARD'|'ROUTER_OUTPUT'>|null,
     *     NameContains?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

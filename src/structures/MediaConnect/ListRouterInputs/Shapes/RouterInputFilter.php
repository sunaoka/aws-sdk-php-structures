<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterInputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $RegionNames
 * @property list<'STANDARD'|'FAILOVER'|'MERGE'|'MEDIACONNECT_FLOW'>|null $InputTypes
 * @property list<string>|null $NameContains
 * @property list<string>|null $NetworkInterfaceArns
 * @property list<'REGIONAL'|'GLOBAL'>|null $RoutingScopes
 */
class RouterInputFilter extends Shape
{
    /**
     * @param array{
     *     RegionNames?: list<string>|null,
     *     InputTypes?: list<'STANDARD'|'FAILOVER'|'MERGE'|'MEDIACONNECT_FLOW'>|null,
     *     NameContains?: list<string>|null,
     *     NetworkInterfaceArns?: list<string>|null,
     *     RoutingScopes?: list<'REGIONAL'|'GLOBAL'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

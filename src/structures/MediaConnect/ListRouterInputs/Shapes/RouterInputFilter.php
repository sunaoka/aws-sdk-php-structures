<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterInputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $NameContains
 * @property list<string>|null $RegionNames
 * @property list<string>|null $NetworkInterfaceArns
 * @property list<'REGIONAL'|'GLOBAL'>|null $RoutingScopes
 * @property list<'STANDARD'|'FAILOVER'|'MERGE'|'MEDIACONNECT_FLOW'|'MEDIALIVE_CHANNEL'>|null $InputTypes
 */
class RouterInputFilter extends Shape
{
    /**
     * @param array{
     *     NameContains?: list<string>|null,
     *     RegionNames?: list<string>|null,
     *     NetworkInterfaceArns?: list<string>|null,
     *     RoutingScopes?: list<'REGIONAL'|'GLOBAL'>|null,
     *     InputTypes?: list<'STANDARD'|'FAILOVER'|'MERGE'|'MEDIACONNECT_FLOW'|'MEDIALIVE_CHANNEL'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

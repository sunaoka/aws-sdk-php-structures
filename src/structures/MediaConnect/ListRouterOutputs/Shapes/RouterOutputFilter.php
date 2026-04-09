<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterOutputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $RegionNames
 * @property list<string>|null $NetworkInterfaceArns
 * @property list<'REGIONAL'|'GLOBAL'>|null $RoutingScopes
 * @property list<'STANDARD'|'MEDIACONNECT_FLOW'|'MEDIALIVE_INPUT'>|null $OutputTypes
 * @property list<string>|null $RoutedInputArns
 * @property list<string>|null $NameContains
 */
class RouterOutputFilter extends Shape
{
    /**
     * @param array{
     *     RegionNames?: list<string>|null,
     *     NetworkInterfaceArns?: list<string>|null,
     *     RoutingScopes?: list<'REGIONAL'|'GLOBAL'>|null,
     *     OutputTypes?: list<'STANDARD'|'MEDIACONNECT_FLOW'|'MEDIALIVE_INPUT'>|null,
     *     RoutedInputArns?: list<string>|null,
     *     NameContains?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

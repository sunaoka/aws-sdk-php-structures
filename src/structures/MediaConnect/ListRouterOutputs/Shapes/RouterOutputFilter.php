<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterOutputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $RegionNames
 * @property list<'STANDARD'|'MEDIACONNECT_FLOW'|'MEDIALIVE_INPUT'>|null $OutputTypes
 * @property list<string>|null $NameContains
 * @property list<string>|null $NetworkInterfaceArns
 * @property list<string>|null $RoutedInputArns
 * @property list<'REGIONAL'|'GLOBAL'>|null $RoutingScopes
 */
class RouterOutputFilter extends Shape
{
    /**
     * @param array{
     *     RegionNames?: list<string>|null,
     *     OutputTypes?: list<'STANDARD'|'MEDIACONNECT_FLOW'|'MEDIALIVE_INPUT'>|null,
     *     NameContains?: list<string>|null,
     *     NetworkInterfaceArns?: list<string>|null,
     *     RoutedInputArns?: list<string>|null,
     *     RoutingScopes?: list<'REGIONAL'|'GLOBAL'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

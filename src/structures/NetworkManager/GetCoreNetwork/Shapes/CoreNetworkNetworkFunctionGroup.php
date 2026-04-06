<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<string>|null $EdgeLocations
 * @property ServiceInsertionSegments|null $Segments
 */
class CoreNetworkNetworkFunctionGroup extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     EdgeLocations?: list<string>|null,
     *     Segments?: ServiceInsertionSegments|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

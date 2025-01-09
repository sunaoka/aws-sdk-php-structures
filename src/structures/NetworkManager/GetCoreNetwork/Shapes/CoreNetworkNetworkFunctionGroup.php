<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $EdgeLocations
 * @property ServiceInsertionSegments $Segments
 */
class CoreNetworkNetworkFunctionGroup extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     EdgeLocations?: list<string>,
     *     Segments?: ServiceInsertionSegments
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NetworkFunctionGroup> $NetworkFunctionGroups
 * @property list<EdgeOverride> $WithEdgeOverrides
 */
class Via extends Shape
{
    /**
     * @param array{
     *     NetworkFunctionGroups?: list<NetworkFunctionGroup>,
     *     WithEdgeOverrides?: list<EdgeOverride>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

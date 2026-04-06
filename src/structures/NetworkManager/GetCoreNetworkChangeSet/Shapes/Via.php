<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NetworkFunctionGroup>|null $NetworkFunctionGroups
 * @property list<EdgeOverride>|null $WithEdgeOverrides
 */
class Via extends Shape
{
    /**
     * @param array{
     *     NetworkFunctionGroups?: list<NetworkFunctionGroup>|null,
     *     WithEdgeOverrides?: list<EdgeOverride>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

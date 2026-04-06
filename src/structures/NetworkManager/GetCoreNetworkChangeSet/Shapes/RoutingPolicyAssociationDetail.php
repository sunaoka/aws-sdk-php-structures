<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $RoutingPolicyNames
 * @property list<string>|null $SharedSegments
 */
class RoutingPolicyAssociationDetail extends Shape
{
    /**
     * @param array{
     *     RoutingPolicyNames?: list<string>|null,
     *     SharedSegments?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

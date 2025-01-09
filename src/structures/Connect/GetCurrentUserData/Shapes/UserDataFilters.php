<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Queues
 * @property ContactFilter $ContactFilter
 * @property list<string> $RoutingProfiles
 * @property list<string> $Agents
 * @property list<string> $UserHierarchyGroups
 */
class UserDataFilters extends Shape
{
    /**
     * @param array{
     *     Queues?: list<string>,
     *     ContactFilter?: ContactFilter,
     *     RoutingProfiles?: list<string>,
     *     Agents?: list<string>,
     *     UserHierarchyGroups?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Queues
 * @property ContactFilter|null $ContactFilter
 * @property list<string>|null $RoutingProfiles
 * @property list<string>|null $Agents
 * @property list<string>|null $UserHierarchyGroups
 */
class UserDataFilters extends Shape
{
    /**
     * @param array{
     *     Queues?: list<string>|null,
     *     ContactFilter?: ContactFilter|null,
     *     RoutingProfiles?: list<string>|null,
     *     Agents?: list<string>|null,
     *     UserHierarchyGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

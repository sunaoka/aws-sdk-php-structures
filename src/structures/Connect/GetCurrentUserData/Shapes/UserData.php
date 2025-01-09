<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserReference $User
 * @property RoutingProfileReference $RoutingProfile
 * @property HierarchyPathReference $HierarchyPath
 * @property AgentStatusReference $Status
 * @property array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int> $AvailableSlotsByChannel
 * @property array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int> $MaxSlotsByChannel
 * @property array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int> $ActiveSlotsByChannel
 * @property list<AgentContactReference> $Contacts
 * @property string $NextStatus
 */
class UserData extends Shape
{
    /**
     * @param array{
     *     User?: UserReference,
     *     RoutingProfile?: RoutingProfileReference,
     *     HierarchyPath?: HierarchyPathReference,
     *     Status?: AgentStatusReference,
     *     AvailableSlotsByChannel?: array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int>,
     *     MaxSlotsByChannel?: array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int>,
     *     ActiveSlotsByChannel?: array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int>,
     *     Contacts?: list<AgentContactReference>,
     *     NextStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserReference|null $User
 * @property RoutingProfileReference|null $RoutingProfile
 * @property HierarchyPathReference|null $HierarchyPath
 * @property AgentStatusReference|null $Status
 * @property array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int<0, max>>|null $AvailableSlotsByChannel
 * @property array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int<0, max>>|null $MaxSlotsByChannel
 * @property array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int<0, max>>|null $ActiveSlotsByChannel
 * @property list<AgentContactReference>|null $Contacts
 * @property string|null $NextStatus
 */
class UserData extends Shape
{
    /**
     * @param array{
     *     User?: UserReference|null,
     *     RoutingProfile?: RoutingProfileReference|null,
     *     HierarchyPath?: HierarchyPathReference|null,
     *     Status?: AgentStatusReference|null,
     *     AvailableSlotsByChannel?: array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int<0, max>>|null,
     *     MaxSlotsByChannel?: array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int<0, max>>|null,
     *     ActiveSlotsByChannel?: array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int<0, max>>|null,
     *     Contacts?: list<AgentContactReference>|null,
     *     NextStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

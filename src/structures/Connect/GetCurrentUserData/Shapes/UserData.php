<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserReference $User
 * @property RoutingProfileReference $RoutingProfile
 * @property HierarchyPathReference $HierarchyPath
 * @property AgentStatusReference $Status
 * @property array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int<0, max>> $AvailableSlotsByChannel
 * @property array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int<0, max>> $MaxSlotsByChannel
 * @property array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int<0, max>> $ActiveSlotsByChannel
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
     *     AvailableSlotsByChannel?: array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int<0, max>>,
     *     MaxSlotsByChannel?: array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int<0, max>>,
     *     ActiveSlotsByChannel?: array<'VOICE'|'CHAT'|'TASK'|'EMAIL', int<0, max>>,
     *     Contacts?: list<AgentContactReference>,
     *     NextStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

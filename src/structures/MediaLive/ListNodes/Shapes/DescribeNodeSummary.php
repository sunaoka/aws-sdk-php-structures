<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<string>|null $ChannelPlacementGroups
 * @property string|null $ClusterId
 * @property 'CONNECTED'|'DISCONNECTED'|null $ConnectionState
 * @property string|null $Id
 * @property string|null $InstanceArn
 * @property string|null $ManagedInstanceId
 * @property string|null $Name
 * @property list<NodeInterfaceMapping>|null $NodeInterfaceMappings
 * @property 'BACKUP'|'ACTIVE'|null $Role
 * @property 'CREATED'|'REGISTERING'|'READY_TO_ACTIVATE'|'REGISTRATION_FAILED'|'ACTIVATION_FAILED'|'ACTIVE'|'READY'|'IN_USE'|'DEREGISTERING'|'DRAINING'|'DEREGISTRATION_FAILED'|'DEREGISTERED'|null $State
 * @property list<SdiSourceMapping>|null $SdiSourceMappings
 */
class DescribeNodeSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ChannelPlacementGroups?: list<string>|null,
     *     ClusterId?: string|null,
     *     ConnectionState?: 'CONNECTED'|'DISCONNECTED'|null,
     *     Id?: string|null,
     *     InstanceArn?: string|null,
     *     ManagedInstanceId?: string|null,
     *     Name?: string|null,
     *     NodeInterfaceMappings?: list<NodeInterfaceMapping>|null,
     *     Role?: 'BACKUP'|'ACTIVE'|null,
     *     State?: 'CREATED'|'REGISTERING'|'READY_TO_ACTIVATE'|'REGISTRATION_FAILED'|'ACTIVATION_FAILED'|'ACTIVE'|'READY'|'IN_USE'|'DEREGISTERING'|'DRAINING'|'DEREGISTRATION_FAILED'|'DEREGISTERED'|null,
     *     SdiSourceMappings?: list<SdiSourceMapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

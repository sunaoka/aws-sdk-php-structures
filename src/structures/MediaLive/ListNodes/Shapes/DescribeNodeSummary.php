<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<string> $ChannelPlacementGroups
 * @property string $ClusterId
 * @property 'CONNECTED'|'DISCONNECTED' $ConnectionState
 * @property string $Id
 * @property string $InstanceArn
 * @property string $ManagedInstanceId
 * @property string $Name
 * @property list<NodeInterfaceMapping> $NodeInterfaceMappings
 * @property 'BACKUP'|'ACTIVE' $Role
 * @property 'CREATED'|'REGISTERING'|'READY_TO_ACTIVATE'|'REGISTRATION_FAILED'|'ACTIVATION_FAILED'|'ACTIVE'|'READY'|'IN_USE'|'DEREGISTERING'|'DRAINING'|'DEREGISTRATION_FAILED'|'DEREGISTERED' $State
 */
class DescribeNodeSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     ChannelPlacementGroups?: list<string>,
     *     ClusterId?: string,
     *     ConnectionState?: 'CONNECTED'|'DISCONNECTED',
     *     Id?: string,
     *     InstanceArn?: string,
     *     ManagedInstanceId?: string,
     *     Name?: string,
     *     NodeInterfaceMappings?: list<NodeInterfaceMapping>,
     *     Role?: 'BACKUP'|'ACTIVE',
     *     State?: 'CREATED'|'REGISTERING'|'READY_TO_ACTIVATE'|'REGISTRATION_FAILED'|'ACTIVATION_FAILED'|'ACTIVE'|'READY'|'IN_USE'|'DEREGISTERING'|'DRAINING'|'DEREGISTRATION_FAILED'|'DEREGISTERED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

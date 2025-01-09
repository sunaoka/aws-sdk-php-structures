<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $InstanceGroupId
 * @property list<'MASTER'|'CORE'|'TASK'> $InstanceGroupTypes
 * @property string $InstanceFleetId
 * @property 'MASTER'|'CORE'|'TASK' $InstanceFleetType
 * @property list<'AWAITING_FULFILLMENT'|'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'TERMINATED'> $InstanceStates
 * @property string $Marker
 */
class ListInstancesRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     InstanceGroupId?: string,
     *     InstanceGroupTypes?: list<'MASTER'|'CORE'|'TASK'>,
     *     InstanceFleetId?: string,
     *     InstanceFleetType?: 'MASTER'|'CORE'|'TASK',
     *     InstanceStates?: list<'AWAITING_FULFILLMENT'|'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'TERMINATED'>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

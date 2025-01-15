<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string|null $InstanceGroupId
 * @property list<'MASTER'|'CORE'|'TASK'>|null $InstanceGroupTypes
 * @property string|null $InstanceFleetId
 * @property 'MASTER'|'CORE'|'TASK'|null $InstanceFleetType
 * @property list<'AWAITING_FULFILLMENT'|'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'TERMINATED'>|null $InstanceStates
 * @property string|null $Marker
 */
class ListInstancesRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     InstanceGroupId?: string|null,
     *     InstanceGroupTypes?: list<'MASTER'|'CORE'|'TASK'>|null,
     *     InstanceFleetId?: string|null,
     *     InstanceFleetType?: 'MASTER'|'CORE'|'TASK'|null,
     *     InstanceStates?: list<'AWAITING_FULFILLMENT'|'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'TERMINATED'>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

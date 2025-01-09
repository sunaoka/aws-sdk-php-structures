<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceGroupId
 * @property string $Name
 * @property 'ON_DEMAND'|'SPOT' $Market
 * @property 'MASTER'|'CORE'|'TASK' $InstanceRole
 * @property string $BidPrice
 * @property string $InstanceType
 * @property int $InstanceRequestCount
 * @property int $InstanceRunningCount
 * @property 'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'RECONFIGURING'|'RESIZING'|'SUSPENDED'|'TERMINATING'|'TERMINATED'|'ARRESTED'|'SHUTTING_DOWN'|'ENDED' $State
 * @property string $LastStateChangeReason
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property \Aws\Api\DateTimeResult $StartDateTime
 * @property \Aws\Api\DateTimeResult $ReadyDateTime
 * @property \Aws\Api\DateTimeResult $EndDateTime
 * @property string $CustomAmiId
 */
class InstanceGroupDetail extends Shape
{
    /**
     * @param array{
     *     InstanceGroupId?: string,
     *     Name?: string,
     *     Market: 'ON_DEMAND'|'SPOT',
     *     InstanceRole: 'MASTER'|'CORE'|'TASK',
     *     BidPrice?: string,
     *     InstanceType: string,
     *     InstanceRequestCount: int,
     *     InstanceRunningCount: int,
     *     State: 'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'RECONFIGURING'|'RESIZING'|'SUSPENDED'|'TERMINATING'|'TERMINATED'|'ARRESTED'|'SHUTTING_DOWN'|'ENDED',
     *     LastStateChangeReason?: string,
     *     CreationDateTime: \Aws\Api\DateTimeResult,
     *     StartDateTime?: \Aws\Api\DateTimeResult,
     *     ReadyDateTime?: \Aws\Api\DateTimeResult,
     *     EndDateTime?: \Aws\Api\DateTimeResult,
     *     CustomAmiId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

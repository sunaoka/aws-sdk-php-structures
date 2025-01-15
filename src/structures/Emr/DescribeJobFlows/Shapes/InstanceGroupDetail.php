<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceGroupId
 * @property string|null $Name
 * @property 'ON_DEMAND'|'SPOT' $Market
 * @property 'MASTER'|'CORE'|'TASK' $InstanceRole
 * @property string|null $BidPrice
 * @property string $InstanceType
 * @property int $InstanceRequestCount
 * @property int $InstanceRunningCount
 * @property 'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'RECONFIGURING'|'RESIZING'|'SUSPENDED'|'TERMINATING'|'TERMINATED'|'ARRESTED'|'SHUTTING_DOWN'|'ENDED' $State
 * @property string|null $LastStateChangeReason
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property \Aws\Api\DateTimeResult|null $StartDateTime
 * @property \Aws\Api\DateTimeResult|null $ReadyDateTime
 * @property \Aws\Api\DateTimeResult|null $EndDateTime
 * @property string|null $CustomAmiId
 */
class InstanceGroupDetail extends Shape
{
    /**
     * @param array{
     *     InstanceGroupId?: string|null,
     *     Name?: string|null,
     *     Market: 'ON_DEMAND'|'SPOT',
     *     InstanceRole: 'MASTER'|'CORE'|'TASK',
     *     BidPrice?: string|null,
     *     InstanceType: string,
     *     InstanceRequestCount: int,
     *     InstanceRunningCount: int,
     *     State: 'PROVISIONING'|'BOOTSTRAPPING'|'RUNNING'|'RECONFIGURING'|'RESIZING'|'SUSPENDED'|'TERMINATING'|'TERMINATED'|'ARRESTED'|'SHUTTING_DOWN'|'ENDED',
     *     LastStateChangeReason?: string|null,
     *     CreationDateTime: \Aws\Api\DateTimeResult,
     *     StartDateTime?: \Aws\Api\DateTimeResult|null,
     *     ReadyDateTime?: \Aws\Api\DateTimeResult|null,
     *     EndDateTime?: \Aws\Api\DateTimeResult|null,
     *     CustomAmiId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCapacityTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CapacityTaskId
 * @property string $OutpostId
 * @property string $OrderId
 * @property list<Shapes\InstanceTypeCapacity> $RequestedInstancePools
 * @property Shapes\InstancesToExclude $InstancesToExclude
 * @property bool $DryRun
 * @property 'REQUESTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'WAITING_FOR_EVACUATION'|'CANCELLATION_IN_PROGRESS'|'CANCELLED' $CapacityTaskStatus
 * @property Shapes\CapacityTaskFailure $Failed
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $CompletionDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property 'WAIT_FOR_EVACUATION'|'FAIL_TASK' $TaskActionOnBlockingInstances
 */
class GetCapacityTaskResponse extends Response
{
}

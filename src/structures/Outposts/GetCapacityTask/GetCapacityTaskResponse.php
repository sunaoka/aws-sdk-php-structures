<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCapacityTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CapacityTaskId
 * @property string|null $OutpostId
 * @property string|null $OrderId
 * @property list<Shapes\InstanceTypeCapacity>|null $RequestedInstancePools
 * @property Shapes\InstancesToExclude|null $InstancesToExclude
 * @property bool|null $DryRun
 * @property 'REQUESTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'WAITING_FOR_EVACUATION'|'CANCELLATION_IN_PROGRESS'|'CANCELLED'|null $CapacityTaskStatus
 * @property Shapes\CapacityTaskFailure|null $Failed
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $CompletionDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property 'WAIT_FOR_EVACUATION'|'FAIL_TASK'|null $TaskActionOnBlockingInstances
 */
class GetCapacityTaskResponse extends Response
{
}

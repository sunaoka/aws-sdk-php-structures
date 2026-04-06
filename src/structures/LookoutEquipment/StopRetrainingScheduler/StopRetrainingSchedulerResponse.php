<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StopRetrainingScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $Status
 */
class StopRetrainingSchedulerResponse extends Response
{
}

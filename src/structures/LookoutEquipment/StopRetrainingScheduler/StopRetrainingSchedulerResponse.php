<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StopRetrainingScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $Status
 */
class StopRetrainingSchedulerResponse extends Response
{
}

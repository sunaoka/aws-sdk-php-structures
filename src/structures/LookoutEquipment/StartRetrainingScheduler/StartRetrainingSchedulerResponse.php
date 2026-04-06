<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StartRetrainingScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $Status
 */
class StartRetrainingSchedulerResponse extends Response
{
}

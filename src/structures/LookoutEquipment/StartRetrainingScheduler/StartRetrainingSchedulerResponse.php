<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StartRetrainingScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $Status
 */
class StartRetrainingSchedulerResponse extends Response
{
}

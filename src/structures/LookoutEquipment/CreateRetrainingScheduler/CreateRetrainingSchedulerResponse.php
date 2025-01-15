<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateRetrainingScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $Status
 */
class CreateRetrainingSchedulerResponse extends Response
{
}

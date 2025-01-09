<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateRetrainingScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $Status
 */
class CreateRetrainingSchedulerResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StopInferenceScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelArn
 * @property string $ModelName
 * @property string $InferenceSchedulerName
 * @property string $InferenceSchedulerArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $Status
 */
class StopInferenceSchedulerResponse extends Response
{
}

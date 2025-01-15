<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StopInferenceScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ModelArn
 * @property string|null $ModelName
 * @property string|null $InferenceSchedulerName
 * @property string|null $InferenceSchedulerArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $Status
 */
class StopInferenceSchedulerResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateInferenceScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InferenceSchedulerArn
 * @property string|null $InferenceSchedulerName
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $Status
 */
class CreateInferenceSchedulerResponse extends Response
{
}

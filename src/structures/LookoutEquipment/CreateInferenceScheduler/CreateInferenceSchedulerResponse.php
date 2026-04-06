<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateInferenceScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InferenceSchedulerArn
 * @property string|null $InferenceSchedulerName
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $Status
 * @property 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED'|null $ModelQuality
 */
class CreateInferenceSchedulerResponse extends Response
{
}

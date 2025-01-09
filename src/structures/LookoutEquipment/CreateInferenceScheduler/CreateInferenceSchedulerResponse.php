<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateInferenceScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InferenceSchedulerArn
 * @property string $InferenceSchedulerName
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $Status
 * @property 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED' $ModelQuality
 */
class CreateInferenceSchedulerResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeInferenceScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelArn
 * @property string $ModelName
 * @property string $InferenceSchedulerName
 * @property string $InferenceSchedulerArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $Status
 * @property int<0, 60> $DataDelayOffsetInMinutes
 * @property 'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H' $DataUploadFrequency
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property Shapes\InferenceInputConfiguration $DataInputConfiguration
 * @property Shapes\InferenceOutputConfiguration $DataOutputConfiguration
 * @property string $RoleArn
 * @property string $ServerSideKmsKeyId
 * @property 'ANOMALOUS'|'NORMAL' $LatestInferenceResult
 */
class DescribeInferenceSchedulerResponse extends Response
{
}

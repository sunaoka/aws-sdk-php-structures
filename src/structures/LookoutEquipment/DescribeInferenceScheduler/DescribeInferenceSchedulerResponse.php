<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeInferenceScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ModelArn
 * @property string|null $ModelName
 * @property string|null $InferenceSchedulerName
 * @property string|null $InferenceSchedulerArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $Status
 * @property int<0, 60>|null $DataDelayOffsetInMinutes
 * @property 'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H'|null $DataUploadFrequency
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property Shapes\InferenceInputConfiguration|null $DataInputConfiguration
 * @property Shapes\InferenceOutputConfiguration|null $DataOutputConfiguration
 * @property string|null $RoleArn
 * @property string|null $ServerSideKmsKeyId
 * @property 'ANOMALOUS'|'NORMAL'|null $LatestInferenceResult
 */
class DescribeInferenceSchedulerResponse extends Response
{
}

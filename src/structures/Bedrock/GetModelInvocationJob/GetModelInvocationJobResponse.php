<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelInvocationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobArn
 * @property string $jobName
 * @property string $modelId
 * @property string $clientRequestToken
 * @property string $roleArn
 * @property 'Submitted'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'PartiallyCompleted'|'Expired'|'Validating'|'Scheduled' $status
 * @property string $message
 * @property \Aws\Api\DateTimeResult $submitTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property Shapes\ModelInvocationJobInputDataConfig $inputDataConfig
 * @property Shapes\ModelInvocationJobOutputDataConfig $outputDataConfig
 * @property Shapes\VpcConfig $vpcConfig
 * @property int<24, 168> $timeoutDurationInHours
 * @property \Aws\Api\DateTimeResult $jobExpirationTime
 */
class GetModelInvocationJobResponse extends Response
{
}

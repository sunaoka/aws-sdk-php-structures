<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelInvocationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobArn
 * @property string|null $jobName
 * @property string $modelId
 * @property string|null $clientRequestToken
 * @property string $roleArn
 * @property 'Submitted'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'PartiallyCompleted'|'Expired'|'Validating'|'Scheduled'|null $status
 * @property string|null $message
 * @property \Aws\Api\DateTimeResult $submitTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Shapes\ModelInvocationJobInputDataConfig $inputDataConfig
 * @property Shapes\ModelInvocationJobOutputDataConfig $outputDataConfig
 * @property Shapes\VpcConfig|null $vpcConfig
 * @property int<24, 168>|null $timeoutDurationInHours
 * @property \Aws\Api\DateTimeResult|null $jobExpirationTime
 */
class GetModelInvocationJobResponse extends Response
{
}

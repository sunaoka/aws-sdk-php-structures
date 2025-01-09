<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelInvocationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property ModelInvocationJobInputDataConfig $inputDataConfig
 * @property ModelInvocationJobOutputDataConfig $outputDataConfig
 * @property VpcConfig $vpcConfig
 * @property int<24, 168> $timeoutDurationInHours
 * @property \Aws\Api\DateTimeResult $jobExpirationTime
 */
class ModelInvocationJobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     jobName: string,
     *     modelId: string,
     *     clientRequestToken?: string,
     *     roleArn: string,
     *     status?: 'Submitted'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'PartiallyCompleted'|'Expired'|'Validating'|'Scheduled',
     *     message?: string,
     *     submitTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     inputDataConfig: ModelInvocationJobInputDataConfig,
     *     outputDataConfig: ModelInvocationJobOutputDataConfig,
     *     vpcConfig?: VpcConfig,
     *     timeoutDurationInHours?: int<24, 168>,
     *     jobExpirationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

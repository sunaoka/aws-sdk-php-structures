<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelInvocationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $jobName
 * @property string $modelId
 * @property string|null $clientRequestToken
 * @property string $roleArn
 * @property 'Submitted'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'PartiallyCompleted'|'Expired'|'Validating'|'Scheduled'|null $status
 * @property string|null $message
 * @property \Aws\Api\DateTimeResult $submitTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property ModelInvocationJobInputDataConfig $inputDataConfig
 * @property ModelInvocationJobOutputDataConfig $outputDataConfig
 * @property VpcConfig|null $vpcConfig
 * @property int<24, 168>|null $timeoutDurationInHours
 * @property \Aws\Api\DateTimeResult|null $jobExpirationTime
 * @property 'InvokeModel'|'Converse'|null $modelInvocationType
 */
class ModelInvocationJobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     jobName: string,
     *     modelId: string,
     *     clientRequestToken?: string|null,
     *     roleArn: string,
     *     status?: 'Submitted'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'PartiallyCompleted'|'Expired'|'Validating'|'Scheduled'|null,
     *     message?: string|null,
     *     submitTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     inputDataConfig: ModelInvocationJobInputDataConfig,
     *     outputDataConfig: ModelInvocationJobOutputDataConfig,
     *     vpcConfig?: VpcConfig|null,
     *     timeoutDurationInHours?: int<24, 168>|null,
     *     jobExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     modelInvocationType?: 'InvokeModel'|'Converse'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

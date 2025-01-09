<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ConfigureAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fleetInstanceId
 * @property array<'ComputePlatform'|'AgentId'|'AwsRequestId'|'ExecutionEnvironment'|'LambdaFunctionArn'|'LambdaMemoryLimitInMB'|'LambdaRemainingTimeInMilliseconds'|'LambdaTimeGapBetweenInvokesInMilliseconds'|'LambdaPreviousExecutionTimeInMilliseconds', string> $metadata
 * @property string $profilingGroupName
 */
class ConfigureAgentRequest extends Request
{
    /**
     * @param array{
     *     fleetInstanceId?: string,
     *     metadata?: array<'ComputePlatform'|'AgentId'|'AwsRequestId'|'ExecutionEnvironment'|'LambdaFunctionArn'|'LambdaMemoryLimitInMB'|'LambdaRemainingTimeInMilliseconds'|'LambdaTimeGapBetweenInvokesInMilliseconds'|'LambdaPreviousExecutionTimeInMilliseconds', string>,
     *     profilingGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

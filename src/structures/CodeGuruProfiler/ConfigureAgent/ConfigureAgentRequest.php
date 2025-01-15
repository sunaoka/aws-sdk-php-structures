<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ConfigureAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $fleetInstanceId
 * @property array<'ComputePlatform'|'AgentId'|'AwsRequestId'|'ExecutionEnvironment'|'LambdaFunctionArn'|'LambdaMemoryLimitInMB'|'LambdaRemainingTimeInMilliseconds'|'LambdaTimeGapBetweenInvokesInMilliseconds'|'LambdaPreviousExecutionTimeInMilliseconds', string>|null $metadata
 * @property string $profilingGroupName
 */
class ConfigureAgentRequest extends Request
{
    /**
     * @param array{
     *     fleetInstanceId?: string|null,
     *     metadata?: array<'ComputePlatform'|'AgentId'|'AwsRequestId'|'ExecutionEnvironment'|'LambdaFunctionArn'|'LambdaMemoryLimitInMB'|'LambdaRemainingTimeInMilliseconds'|'LambdaTimeGapBetweenInvokesInMilliseconds'|'LambdaPreviousExecutionTimeInMilliseconds', string>|null,
     *     profilingGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

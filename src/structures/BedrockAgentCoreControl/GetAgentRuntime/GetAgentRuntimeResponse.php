<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentRuntimeArn
 * @property string $agentRuntimeName
 * @property string $agentRuntimeId
 * @property string $agentRuntimeVersion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $roleArn
 * @property Shapes\NetworkConfiguration $networkConfiguration
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING' $status
 * @property Shapes\LifecycleConfiguration $lifecycleConfiguration
 * @property string|null $failureReason
 * @property string|null $description
 * @property Shapes\WorkloadIdentityDetails|null $workloadIdentityDetails
 * @property Shapes\AgentRuntimeArtifact|null $agentRuntimeArtifact
 * @property Shapes\ProtocolConfiguration|null $protocolConfiguration
 * @property array<string, string>|null $environmentVariables
 * @property Shapes\AuthorizerConfiguration|null $authorizerConfiguration
 * @property Shapes\RequestHeaderConfiguration|null $requestHeaderConfiguration
 */
class GetAgentRuntimeResponse extends Response
{
}

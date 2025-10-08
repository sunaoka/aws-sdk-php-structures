<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentRuntimeName
 * @property Shapes\AgentRuntimeArtifact $agentRuntimeArtifact
 * @property string $roleArn
 * @property Shapes\NetworkConfiguration $networkConfiguration
 * @property string|null $clientToken
 * @property string|null $description
 * @property Shapes\AuthorizerConfiguration|null $authorizerConfiguration
 * @property Shapes\RequestHeaderConfiguration|null $requestHeaderConfiguration
 * @property Shapes\ProtocolConfiguration|null $protocolConfiguration
 * @property Shapes\LifecycleConfiguration|null $lifecycleConfiguration
 * @property array<string, string>|null $environmentVariables
 * @property array<string, string>|null $tags
 */
class CreateAgentRuntimeRequest extends Request
{
    /**
     * @param array{
     *     agentRuntimeName: string,
     *     agentRuntimeArtifact: Shapes\AgentRuntimeArtifact,
     *     roleArn: string,
     *     networkConfiguration: Shapes\NetworkConfiguration,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     authorizerConfiguration?: Shapes\AuthorizerConfiguration|null,
     *     requestHeaderConfiguration?: Shapes\RequestHeaderConfiguration|null,
     *     protocolConfiguration?: Shapes\ProtocolConfiguration|null,
     *     lifecycleConfiguration?: Shapes\LifecycleConfiguration|null,
     *     environmentVariables?: array<string, string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

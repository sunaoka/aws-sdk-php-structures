<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentRuntimeId
 * @property Shapes\AgentRuntimeArtifact $agentRuntimeArtifact
 * @property string $roleArn
 * @property Shapes\NetworkConfiguration $networkConfiguration
 * @property string|null $description
 * @property Shapes\AuthorizerConfiguration|null $authorizerConfiguration
 * @property Shapes\RequestHeaderConfiguration|null $requestHeaderConfiguration
 * @property Shapes\ProtocolConfiguration|null $protocolConfiguration
 * @property Shapes\LifecycleConfiguration|null $lifecycleConfiguration
 * @property Shapes\RuntimeMetadataConfiguration|null $metadataConfiguration
 * @property array<string, string>|null $environmentVariables
 * @property list<Shapes\FilesystemConfiguration>|null $filesystemConfigurations
 * @property string|null $clientToken
 */
class UpdateAgentRuntimeRequest extends Request
{
    /**
     * @param array{
     *     agentRuntimeId: string,
     *     agentRuntimeArtifact: Shapes\AgentRuntimeArtifact,
     *     roleArn: string,
     *     networkConfiguration: Shapes\NetworkConfiguration,
     *     description?: string|null,
     *     authorizerConfiguration?: Shapes\AuthorizerConfiguration|null,
     *     requestHeaderConfiguration?: Shapes\RequestHeaderConfiguration|null,
     *     protocolConfiguration?: Shapes\ProtocolConfiguration|null,
     *     lifecycleConfiguration?: Shapes\LifecycleConfiguration|null,
     *     metadataConfiguration?: Shapes\RuntimeMetadataConfiguration|null,
     *     environmentVariables?: array<string, string>|null,
     *     filesystemConfigurations?: list<Shapes\FilesystemConfiguration>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

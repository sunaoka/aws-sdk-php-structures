<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $gatewayArn
 * @property string $targetId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED'|'SYNCHRONIZING'|'SYNCHRONIZE_UNSUCCESSFUL'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH'|'SYNCHRONIZE_PENDING_AUTH' $status
 * @property list<string>|null $statusReasons
 * @property string $name
 * @property string|null $description
 * @property TargetConfiguration $targetConfiguration
 * @property list<CredentialProviderConfiguration> $credentialProviderConfigurations
 * @property \Aws\Api\DateTimeResult|null $lastSynchronizedAt
 * @property MetadataConfiguration|null $metadataConfiguration
 * @property PrivateEndpoint|null $privateEndpoint
 * @property list<ManagedResourceDetails>|null $privateEndpointManagedResources
 * @property AuthorizationData|null $authorizationData
 * @property 'MCP'|'HTTP'|null $protocolType
 */
class GatewayTarget extends Shape
{
    /**
     * @param array{
     *     gatewayArn: string,
     *     targetId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     status: 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED'|'SYNCHRONIZING'|'SYNCHRONIZE_UNSUCCESSFUL'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH'|'SYNCHRONIZE_PENDING_AUTH',
     *     statusReasons?: list<string>|null,
     *     name: string,
     *     description?: string|null,
     *     targetConfiguration: TargetConfiguration,
     *     credentialProviderConfigurations: list<CredentialProviderConfiguration>,
     *     lastSynchronizedAt?: \Aws\Api\DateTimeResult|null,
     *     metadataConfiguration?: MetadataConfiguration|null,
     *     privateEndpoint?: PrivateEndpoint|null,
     *     privateEndpointManagedResources?: list<ManagedResourceDetails>|null,
     *     authorizationData?: AuthorizationData|null,
     *     protocolType?: 'MCP'|'HTTP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

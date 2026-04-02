<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayArn
 * @property string $targetId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED'|'SYNCHRONIZING'|'SYNCHRONIZE_UNSUCCESSFUL'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH'|'SYNCHRONIZE_PENDING_AUTH' $status
 * @property list<string>|null $statusReasons
 * @property string $name
 * @property string|null $description
 * @property Shapes\TargetConfiguration $targetConfiguration
 * @property list<Shapes\CredentialProviderConfiguration> $credentialProviderConfigurations
 * @property \Aws\Api\DateTimeResult|null $lastSynchronizedAt
 * @property Shapes\MetadataConfiguration|null $metadataConfiguration
 * @property Shapes\PrivateEndpoint|null $privateEndpoint
 * @property list<Shapes\ManagedResourceDetails>|null $privateEndpointManagedResources
 * @property Shapes\AuthorizationData|null $authorizationData
 */
class CreateGatewayTargetResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayArn
 * @property string $targetId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED'|'SYNCHRONIZING'|'SYNCHRONIZE_UNSUCCESSFUL' $status
 * @property list<string>|null $statusReasons
 * @property string $name
 * @property string|null $description
 * @property Shapes\TargetConfiguration $targetConfiguration
 * @property list<Shapes\CredentialProviderConfiguration> $credentialProviderConfigurations
 * @property \Aws\Api\DateTimeResult|null $lastSynchronizedAt
 * @property Shapes\MetadataConfiguration|null $metadataConfiguration
 */
class CreateGatewayTargetResponse extends Response
{
}

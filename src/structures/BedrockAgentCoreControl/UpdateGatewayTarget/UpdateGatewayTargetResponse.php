<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayArn
 * @property string $targetId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED' $status
 * @property list<string>|null $statusReasons
 * @property string $name
 * @property string|null $description
 * @property Shapes\TargetConfiguration $targetConfiguration
 * @property list<Shapes\CredentialProviderConfiguration> $credentialProviderConfigurations
 */
class UpdateGatewayTargetResponse extends Response
{
}

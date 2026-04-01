<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string $targetId
 * @property string $name
 * @property string|null $description
 * @property Shapes\TargetConfiguration $targetConfiguration
 * @property list<Shapes\CredentialProviderConfiguration>|null $credentialProviderConfigurations
 * @property Shapes\MetadataConfiguration|null $metadataConfiguration
 * @property Shapes\PrivateEndpoint|null $privateEndpoint
 */
class UpdateGatewayTargetRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     targetId: string,
     *     name: string,
     *     description?: string|null,
     *     targetConfiguration: Shapes\TargetConfiguration,
     *     credentialProviderConfigurations?: list<Shapes\CredentialProviderConfiguration>|null,
     *     metadataConfiguration?: Shapes\MetadataConfiguration|null,
     *     privateEndpoint?: Shapes\PrivateEndpoint|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

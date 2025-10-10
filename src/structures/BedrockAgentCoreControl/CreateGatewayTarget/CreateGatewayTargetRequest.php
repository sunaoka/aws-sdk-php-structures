<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string $name
 * @property string|null $description
 * @property string|null $clientToken
 * @property Shapes\TargetConfiguration $targetConfiguration
 * @property list<Shapes\CredentialProviderConfiguration>|null $credentialProviderConfigurations
 */
class CreateGatewayTargetRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     name: string,
     *     description?: string|null,
     *     clientToken?: string|null,
     *     targetConfiguration: Shapes\TargetConfiguration,
     *     credentialProviderConfigurations?: list<Shapes\CredentialProviderConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

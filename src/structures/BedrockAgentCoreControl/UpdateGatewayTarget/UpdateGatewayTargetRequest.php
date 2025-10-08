<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string $targetId
 * @property string $name
 * @property string|null $description
 * @property Shapes\TargetConfiguration $targetConfiguration
 * @property list<Shapes\CredentialProviderConfiguration> $credentialProviderConfigurations
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
     *     credentialProviderConfigurations: list<Shapes\CredentialProviderConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

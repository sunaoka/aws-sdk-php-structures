<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientId
 * @property string|null $clientSecret
 * @property SecretReference|null $clientSecretConfig
 * @property 'MANAGED'|'EXTERNAL'|null $clientSecretSource
 * @property string|null $issuer
 * @property string|null $authorizationEndpoint
 * @property string|null $tokenEndpoint
 */
class IncludedOauth2ProviderConfigInput extends Shape
{
    /**
     * @param array{
     *     clientId: string,
     *     clientSecret?: string|null,
     *     clientSecretConfig?: SecretReference|null,
     *     clientSecretSource?: 'MANAGED'|'EXTERNAL'|null,
     *     issuer?: string|null,
     *     authorizationEndpoint?: string|null,
     *     tokenEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

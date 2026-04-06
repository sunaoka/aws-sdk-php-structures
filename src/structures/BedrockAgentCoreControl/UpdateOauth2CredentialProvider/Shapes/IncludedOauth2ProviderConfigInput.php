<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientId
 * @property string $clientSecret
 * @property string|null $issuer
 * @property string|null $authorizationEndpoint
 * @property string|null $tokenEndpoint
 */
class IncludedOauth2ProviderConfigInput extends Shape
{
    /**
     * @param array{
     *     clientId: string,
     *     clientSecret: string,
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

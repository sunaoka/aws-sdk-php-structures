<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrivateKeySource|null $privateKeySource
 * @property 'RS256'|'PS256'|'ES256'|null $signingAlgorithm
 * @property array<string, string>|null $additionalHeaderClaims
 * @property array<string, string>|null $additionalPayloadClaims
 */
class PrivateKeyJwtConfig extends Shape
{
    /**
     * @param array{
     *     privateKeySource?: PrivateKeySource|null,
     *     signingAlgorithm?: 'RS256'|'PS256'|'ES256'|null,
     *     additionalHeaderClaims?: array<string, string>|null,
     *     additionalPayloadClaims?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

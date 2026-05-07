<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPaymentManager\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $discoveryUrl
 * @property list<string>|null $allowedAudience
 * @property list<string>|null $allowedClients
 * @property list<string>|null $allowedScopes
 * @property list<CustomClaimValidationType>|null $customClaims
 * @property PrivateEndpoint|null $privateEndpoint
 * @property list<PrivateEndpointOverride>|null $privateEndpointOverrides
 */
class CustomJWTAuthorizerConfiguration extends Shape
{
    /**
     * @param array{
     *     discoveryUrl: string,
     *     allowedAudience?: list<string>|null,
     *     allowedClients?: list<string>|null,
     *     allowedScopes?: list<string>|null,
     *     customClaims?: list<CustomClaimValidationType>|null,
     *     privateEndpoint?: PrivateEndpoint|null,
     *     privateEndpointOverrides?: list<PrivateEndpointOverride>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

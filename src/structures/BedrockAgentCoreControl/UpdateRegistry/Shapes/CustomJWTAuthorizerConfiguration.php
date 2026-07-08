<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $discoveryUrl
 * @property list<string>|null $allowedAudience
 * @property list<string>|null $allowedClients
 * @property list<string>|null $allowedScopes
 * @property array<string, string>|null $advertisedScopeMapping
 * @property list<CustomClaimValidationType>|null $customClaims
 * @property PrivateEndpoint|null $privateEndpoint
 * @property list<PrivateEndpointOverride>|null $privateEndpointOverrides
 * @property AllowedWorkloadConfiguration|null $allowedWorkloadConfiguration
 */
class CustomJWTAuthorizerConfiguration extends Shape
{
    /**
     * @param array{
     *     discoveryUrl: string,
     *     allowedAudience?: list<string>|null,
     *     allowedClients?: list<string>|null,
     *     allowedScopes?: list<string>|null,
     *     advertisedScopeMapping?: array<string, string>|null,
     *     customClaims?: list<CustomClaimValidationType>|null,
     *     privateEndpoint?: PrivateEndpoint|null,
     *     privateEndpointOverrides?: list<PrivateEndpointOverride>|null,
     *     allowedWorkloadConfiguration?: AllowedWorkloadConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

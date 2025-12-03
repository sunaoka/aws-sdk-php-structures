<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $discoveryUrl
 * @property list<string>|null $allowedAudience
 * @property list<string>|null $allowedClients
 * @property list<string>|null $allowedScopes
 * @property list<CustomClaimValidationType>|null $customClaims
 */
class CustomJWTAuthorizerConfiguration extends Shape
{
    /**
     * @param array{
     *     discoveryUrl: string,
     *     allowedAudience?: list<string>|null,
     *     allowedClients?: list<string>|null,
     *     allowedScopes?: list<string>|null,
     *     customClaims?: list<CustomClaimValidationType>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

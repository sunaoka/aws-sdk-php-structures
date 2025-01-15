<?php

namespace Sunaoka\Aws\Structures\EKS\AssociateIdentityProviderConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identityProviderConfigName
 * @property string $issuerUrl
 * @property string $clientId
 * @property string|null $usernameClaim
 * @property string|null $usernamePrefix
 * @property string|null $groupsClaim
 * @property string|null $groupsPrefix
 * @property array<string, string>|null $requiredClaims
 */
class OidcIdentityProviderConfigRequest extends Shape
{
    /**
     * @param array{
     *     identityProviderConfigName: string,
     *     issuerUrl: string,
     *     clientId: string,
     *     usernameClaim?: string|null,
     *     usernamePrefix?: string|null,
     *     groupsClaim?: string|null,
     *     groupsPrefix?: string|null,
     *     requiredClaims?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

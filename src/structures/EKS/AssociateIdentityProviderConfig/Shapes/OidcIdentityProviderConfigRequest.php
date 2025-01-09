<?php

namespace Sunaoka\Aws\Structures\EKS\AssociateIdentityProviderConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identityProviderConfigName
 * @property string $issuerUrl
 * @property string $clientId
 * @property string $usernameClaim
 * @property string $usernamePrefix
 * @property string $groupsClaim
 * @property string $groupsPrefix
 * @property array<string, string> $requiredClaims
 */
class OidcIdentityProviderConfigRequest extends Shape
{
    /**
     * @param array{
     *     identityProviderConfigName: string,
     *     issuerUrl: string,
     *     clientId: string,
     *     usernameClaim?: string,
     *     usernamePrefix?: string,
     *     groupsClaim?: string,
     *     groupsPrefix?: string,
     *     requiredClaims?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeIdentityProviderConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identityProviderConfigName
 * @property string|null $identityProviderConfigArn
 * @property string|null $clusterName
 * @property string|null $issuerUrl
 * @property string|null $clientId
 * @property string|null $usernameClaim
 * @property string|null $usernamePrefix
 * @property string|null $groupsClaim
 * @property string|null $groupsPrefix
 * @property array<string, string>|null $requiredClaims
 * @property array<string, string>|null $tags
 * @property 'CREATING'|'DELETING'|'ACTIVE'|null $status
 */
class OidcIdentityProviderConfig extends Shape
{
    /**
     * @param array{
     *     identityProviderConfigName?: string|null,
     *     identityProviderConfigArn?: string|null,
     *     clusterName?: string|null,
     *     issuerUrl?: string|null,
     *     clientId?: string|null,
     *     usernameClaim?: string|null,
     *     usernamePrefix?: string|null,
     *     groupsClaim?: string|null,
     *     groupsPrefix?: string|null,
     *     requiredClaims?: array<string, string>|null,
     *     tags?: array<string, string>|null,
     *     status?: 'CREATING'|'DELETING'|'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

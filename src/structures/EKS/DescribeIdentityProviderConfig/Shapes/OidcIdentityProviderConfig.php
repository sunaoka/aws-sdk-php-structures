<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeIdentityProviderConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identityProviderConfigName
 * @property string $identityProviderConfigArn
 * @property string $clusterName
 * @property string $issuerUrl
 * @property string $clientId
 * @property string $usernameClaim
 * @property string $usernamePrefix
 * @property string $groupsClaim
 * @property string $groupsPrefix
 * @property array<string, string> $requiredClaims
 * @property array<string, string> $tags
 * @property 'CREATING'|'DELETING'|'ACTIVE' $status
 */
class OidcIdentityProviderConfig extends Shape
{
    /**
     * @param array{
     *     identityProviderConfigName?: string,
     *     identityProviderConfigArn?: string,
     *     clusterName?: string,
     *     issuerUrl?: string,
     *     clientId?: string,
     *     usernameClaim?: string,
     *     usernamePrefix?: string,
     *     groupsClaim?: string,
     *     groupsPrefix?: string,
     *     requiredClaims?: array<string, string>,
     *     tags?: array<string, string>,
     *     status?: 'CREATING'|'DELETING'|'ACTIVE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EKS\AssociateIdentityProviderConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property Shapes\OidcIdentityProviderConfigRequest $oidc
 * @property array<string, string> $tags
 * @property string $clientRequestToken
 */
class AssociateIdentityProviderConfigRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     oidc: Shapes\OidcIdentityProviderConfigRequest,
     *     tags?: array<string, string>,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

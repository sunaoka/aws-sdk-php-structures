<?php

namespace Sunaoka\Aws\Structures\EKS\DisassociateIdentityProviderConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property Shapes\IdentityProviderConfig $identityProviderConfig
 * @property string $clientRequestToken
 */
class DisassociateIdentityProviderConfigRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     identityProviderConfig: Shapes\IdentityProviderConfig,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

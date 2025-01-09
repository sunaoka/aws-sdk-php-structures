<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateTrustedTokenIssuer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $InstanceArn
 * @property string $Name
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\TrustedTokenIssuerConfiguration $TrustedTokenIssuerConfiguration
 * @property 'OIDC_JWT' $TrustedTokenIssuerType
 */
class CreateTrustedTokenIssuerRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     InstanceArn: string,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>,
     *     TrustedTokenIssuerConfiguration: Shapes\TrustedTokenIssuerConfiguration,
     *     TrustedTokenIssuerType: 'OIDC_JWT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

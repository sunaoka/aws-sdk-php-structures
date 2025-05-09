<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateTrustedTokenIssuer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $Name
 * @property 'OIDC_JWT' $TrustedTokenIssuerType
 * @property Shapes\TrustedTokenIssuerConfiguration $TrustedTokenIssuerConfiguration
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateTrustedTokenIssuerRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     Name: string,
     *     TrustedTokenIssuerType: 'OIDC_JWT',
     *     TrustedTokenIssuerConfiguration: Shapes\TrustedTokenIssuerConfiguration,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportVerifiedAccessInstanceClientConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'iam-identity-center'|'oidc' $Type
 * @property string $Scopes
 * @property string $Issuer
 * @property string $AuthorizationEndpoint
 * @property string $PublicSigningKeyEndpoint
 * @property string $TokenEndpoint
 * @property string $UserInfoEndpoint
 * @property string $ClientId
 * @property string $ClientSecret
 * @property bool $PkceEnabled
 */
class VerifiedAccessInstanceUserTrustProviderClientConfiguration extends Shape
{
    /**
     * @param array{
     *     Type?: 'iam-identity-center'|'oidc',
     *     Scopes?: string,
     *     Issuer?: string,
     *     AuthorizationEndpoint?: string,
     *     PublicSigningKeyEndpoint?: string,
     *     TokenEndpoint?: string,
     *     UserInfoEndpoint?: string,
     *     ClientId?: string,
     *     ClientSecret?: string,
     *     PkceEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

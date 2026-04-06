<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportVerifiedAccessInstanceClientConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'iam-identity-center'|'oidc'|null $Type
 * @property string|null $Scopes
 * @property string|null $Issuer
 * @property string|null $AuthorizationEndpoint
 * @property string|null $PublicSigningKeyEndpoint
 * @property string|null $TokenEndpoint
 * @property string|null $UserInfoEndpoint
 * @property string|null $ClientId
 * @property string|null $ClientSecret
 * @property bool|null $PkceEnabled
 */
class VerifiedAccessInstanceUserTrustProviderClientConfiguration extends Shape
{
    /**
     * @param array{
     *     Type?: 'iam-identity-center'|'oidc'|null,
     *     Scopes?: string|null,
     *     Issuer?: string|null,
     *     AuthorizationEndpoint?: string|null,
     *     PublicSigningKeyEndpoint?: string|null,
     *     TokenEndpoint?: string|null,
     *     UserInfoEndpoint?: string|null,
     *     ClientId?: string|null,
     *     ClientSecret?: string|null,
     *     PkceEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessTrustProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Issuer
 * @property string $AuthorizationEndpoint
 * @property string $TokenEndpoint
 * @property string $UserInfoEndpoint
 * @property string $ClientId
 * @property string $ClientSecret
 * @property string $Scope
 */
class CreateVerifiedAccessTrustProviderOidcOptions extends Shape
{
    /**
     * @param array{
     *     Issuer?: string,
     *     AuthorizationEndpoint?: string,
     *     TokenEndpoint?: string,
     *     UserInfoEndpoint?: string,
     *     ClientId?: string,
     *     ClientSecret?: string,
     *     Scope?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

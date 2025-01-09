<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessTrustProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PublicSigningKeyEndpoint
 * @property string $Issuer
 * @property string $AuthorizationEndpoint
 * @property string $TokenEndpoint
 * @property string $UserInfoEndpoint
 * @property string $ClientId
 * @property string $Scope
 */
class NativeApplicationOidcOptions extends Shape
{
    /**
     * @param array{
     *     PublicSigningKeyEndpoint?: string,
     *     Issuer?: string,
     *     AuthorizationEndpoint?: string,
     *     TokenEndpoint?: string,
     *     UserInfoEndpoint?: string,
     *     ClientId?: string,
     *     Scope?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVerifiedAccessTrustProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PublicSigningKeyEndpoint
 * @property string|null $Issuer
 * @property string|null $AuthorizationEndpoint
 * @property string|null $TokenEndpoint
 * @property string|null $UserInfoEndpoint
 * @property string|null $ClientId
 * @property string|null $Scope
 */
class NativeApplicationOidcOptions extends Shape
{
    /**
     * @param array{
     *     PublicSigningKeyEndpoint?: string|null,
     *     Issuer?: string|null,
     *     AuthorizationEndpoint?: string|null,
     *     TokenEndpoint?: string|null,
     *     UserInfoEndpoint?: string|null,
     *     ClientId?: string|null,
     *     Scope?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

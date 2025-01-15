<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachVerifiedAccessTrustProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Issuer
 * @property string|null $AuthorizationEndpoint
 * @property string|null $TokenEndpoint
 * @property string|null $UserInfoEndpoint
 * @property string|null $ClientId
 * @property string|null $ClientSecret
 * @property string|null $Scope
 */
class OidcOptions extends Shape
{
    /**
     * @param array{
     *     Issuer?: string|null,
     *     AuthorizationEndpoint?: string|null,
     *     TokenEndpoint?: string|null,
     *     UserInfoEndpoint?: string|null,
     *     ClientId?: string|null,
     *     ClientSecret?: string|null,
     *     Scope?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeWorkforce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientId
 * @property string|null $Issuer
 * @property string|null $AuthorizationEndpoint
 * @property string|null $TokenEndpoint
 * @property string|null $UserInfoEndpoint
 * @property string|null $LogoutEndpoint
 * @property string|null $JwksUri
 * @property string|null $Scope
 * @property array<string, string>|null $AuthenticationRequestExtraParams
 */
class OidcConfigForResponse extends Shape
{
    /**
     * @param array{
     *     ClientId?: string|null,
     *     Issuer?: string|null,
     *     AuthorizationEndpoint?: string|null,
     *     TokenEndpoint?: string|null,
     *     UserInfoEndpoint?: string|null,
     *     LogoutEndpoint?: string|null,
     *     JwksUri?: string|null,
     *     Scope?: string|null,
     *     AuthenticationRequestExtraParams?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeWorkforce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $Issuer
 * @property string $AuthorizationEndpoint
 * @property string $TokenEndpoint
 * @property string $UserInfoEndpoint
 * @property string $LogoutEndpoint
 * @property string $JwksUri
 * @property string $Scope
 * @property array<string, string> $AuthenticationRequestExtraParams
 */
class OidcConfigForResponse extends Shape
{
    /**
     * @param array{
     *     ClientId?: string,
     *     Issuer?: string,
     *     AuthorizationEndpoint?: string,
     *     TokenEndpoint?: string,
     *     UserInfoEndpoint?: string,
     *     LogoutEndpoint?: string,
     *     JwksUri?: string,
     *     Scope?: string,
     *     AuthenticationRequestExtraParams?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkforce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $ClientSecret
 * @property string $Issuer
 * @property string $AuthorizationEndpoint
 * @property string $TokenEndpoint
 * @property string $UserInfoEndpoint
 * @property string $LogoutEndpoint
 * @property string $JwksUri
 * @property string|null $Scope
 * @property array<string, string>|null $AuthenticationRequestExtraParams
 */
class OidcConfig extends Shape
{
    /**
     * @param array{
     *     ClientId: string,
     *     ClientSecret: string,
     *     Issuer: string,
     *     AuthorizationEndpoint: string,
     *     TokenEndpoint: string,
     *     UserInfoEndpoint: string,
     *     LogoutEndpoint: string,
     *     JwksUri: string,
     *     Scope?: string|null,
     *     AuthenticationRequestExtraParams?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

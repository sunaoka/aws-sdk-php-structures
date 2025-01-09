<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Issuer
 * @property string $AuthorizationEndpoint
 * @property string $TokenEndpoint
 * @property string $UserInfoEndpoint
 * @property string $ClientId
 * @property string $ClientSecret
 * @property string $SessionCookieName
 * @property string $Scope
 * @property int $SessionTimeout
 * @property array<string, string> $AuthenticationRequestExtraParams
 * @property 'deny'|'allow'|'authenticate' $OnUnauthenticatedRequest
 * @property bool $UseExistingClientSecret
 */
class AuthenticateOidcActionConfig extends Shape
{
    /**
     * @param array{
     *     Issuer: string,
     *     AuthorizationEndpoint: string,
     *     TokenEndpoint: string,
     *     UserInfoEndpoint: string,
     *     ClientId: string,
     *     ClientSecret?: string,
     *     SessionCookieName?: string,
     *     Scope?: string,
     *     SessionTimeout?: int,
     *     AuthenticationRequestExtraParams?: array<string, string>,
     *     OnUnauthenticatedRequest?: 'deny'|'allow'|'authenticate',
     *     UseExistingClientSecret?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

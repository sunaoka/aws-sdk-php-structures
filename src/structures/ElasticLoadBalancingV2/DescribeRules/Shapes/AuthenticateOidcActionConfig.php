<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Issuer
 * @property string $AuthorizationEndpoint
 * @property string $TokenEndpoint
 * @property string $UserInfoEndpoint
 * @property string $ClientId
 * @property string|null $ClientSecret
 * @property string|null $SessionCookieName
 * @property string|null $Scope
 * @property int|null $SessionTimeout
 * @property array<string, string>|null $AuthenticationRequestExtraParams
 * @property 'deny'|'allow'|'authenticate'|null $OnUnauthenticatedRequest
 * @property bool|null $UseExistingClientSecret
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
     *     ClientSecret?: string|null,
     *     SessionCookieName?: string|null,
     *     Scope?: string|null,
     *     SessionTimeout?: int|null,
     *     AuthenticationRequestExtraParams?: array<string, string>|null,
     *     OnUnauthenticatedRequest?: 'deny'|'allow'|'authenticate'|null,
     *     UseExistingClientSecret?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserPoolArn
 * @property string $UserPoolClientId
 * @property string $UserPoolDomain
 * @property string|null $SessionCookieName
 * @property string|null $Scope
 * @property int|null $SessionTimeout
 * @property array<string, string>|null $AuthenticationRequestExtraParams
 * @property 'deny'|'allow'|'authenticate'|null $OnUnauthenticatedRequest
 */
class AuthenticateCognitoActionConfig extends Shape
{
    /**
     * @param array{
     *     UserPoolArn: string,
     *     UserPoolClientId: string,
     *     UserPoolDomain: string,
     *     SessionCookieName?: string|null,
     *     Scope?: string|null,
     *     SessionTimeout?: int|null,
     *     AuthenticationRequestExtraParams?: array<string, string>|null,
     *     OnUnauthenticatedRequest?: 'deny'|'allow'|'authenticate'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

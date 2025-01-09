<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserPoolArn
 * @property string $UserPoolClientId
 * @property string $UserPoolDomain
 * @property string $SessionCookieName
 * @property string $Scope
 * @property int $SessionTimeout
 * @property array<string, string> $AuthenticationRequestExtraParams
 * @property 'deny'|'allow'|'authenticate' $OnUnauthenticatedRequest
 */
class AuthenticateCognitoActionConfig extends Shape
{
    /**
     * @param array{
     *     UserPoolArn: string,
     *     UserPoolClientId: string,
     *     UserPoolDomain: string,
     *     SessionCookieName?: string,
     *     Scope?: string,
     *     SessionTimeout?: int,
     *     AuthenticationRequestExtraParams?: array<string, string>,
     *     OnUnauthenticatedRequest?: 'deny'|'allow'|'authenticate'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

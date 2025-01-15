<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'forward'|'authenticate-oidc'|'authenticate-cognito'|'redirect'|'fixed-response' $Type
 * @property string|null $TargetGroupArn
 * @property AuthenticateOidcActionConfig|null $AuthenticateOidcConfig
 * @property AuthenticateCognitoActionConfig|null $AuthenticateCognitoConfig
 * @property int<1, 50000>|null $Order
 * @property RedirectActionConfig|null $RedirectConfig
 * @property FixedResponseActionConfig|null $FixedResponseConfig
 * @property ForwardActionConfig|null $ForwardConfig
 */
class Action extends Shape
{
    /**
     * @param array{
     *     Type: 'forward'|'authenticate-oidc'|'authenticate-cognito'|'redirect'|'fixed-response',
     *     TargetGroupArn?: string|null,
     *     AuthenticateOidcConfig?: AuthenticateOidcActionConfig|null,
     *     AuthenticateCognitoConfig?: AuthenticateCognitoActionConfig|null,
     *     Order?: int<1, 50000>|null,
     *     RedirectConfig?: RedirectActionConfig|null,
     *     FixedResponseConfig?: FixedResponseActionConfig|null,
     *     ForwardConfig?: ForwardActionConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

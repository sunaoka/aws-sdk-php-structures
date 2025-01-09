<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'forward'|'authenticate-oidc'|'authenticate-cognito'|'redirect'|'fixed-response' $Type
 * @property string $TargetGroupArn
 * @property AuthenticateOidcActionConfig $AuthenticateOidcConfig
 * @property AuthenticateCognitoActionConfig $AuthenticateCognitoConfig
 * @property int<1, 50000> $Order
 * @property RedirectActionConfig $RedirectConfig
 * @property FixedResponseActionConfig $FixedResponseConfig
 * @property ForwardActionConfig $ForwardConfig
 */
class Action extends Shape
{
    /**
     * @param array{
     *     Type: 'forward'|'authenticate-oidc'|'authenticate-cognito'|'redirect'|'fixed-response',
     *     TargetGroupArn?: string,
     *     AuthenticateOidcConfig?: AuthenticateOidcActionConfig,
     *     AuthenticateCognitoConfig?: AuthenticateCognitoActionConfig,
     *     Order?: int<1, 50000>,
     *     RedirectConfig?: RedirectActionConfig,
     *     FixedResponseConfig?: FixedResponseActionConfig,
     *     ForwardConfig?: ForwardActionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

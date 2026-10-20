<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $acmCertificateArn
 * @property string|null $loadBalancerArn
 * @property list<string>|null $loadBalancerSecurityGroupArns
 * @property string|null $listenerArn
 * @property string|null $listenerRuleArn
 * @property string|null $testListenerRuleArn
 * @property string|null $targetGroupArn
 * @property string|null $alternateTargetGroupArn
 */
class GatewayConnectionAlbResources extends Shape
{
    /**
     * @param array{
     *     acmCertificateArn?: string|null,
     *     loadBalancerArn?: string|null,
     *     loadBalancerSecurityGroupArns?: list<string>|null,
     *     listenerArn?: string|null,
     *     listenerRuleArn?: string|null,
     *     testListenerRuleArn?: string|null,
     *     targetGroupArn?: string|null,
     *     alternateTargetGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MailManager\ListTrafficPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrafficPolicyName
 * @property string $TrafficPolicyId
 * @property 'ALLOW'|'DENY' $DefaultAction
 */
class TrafficPolicy extends Shape
{
    /**
     * @param array{
     *     TrafficPolicyName: string,
     *     TrafficPolicyId: string,
     *     DefaultAction: 'ALLOW'|'DENY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

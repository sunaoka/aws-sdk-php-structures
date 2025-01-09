<?php

namespace Sunaoka\Aws\Structures\MailManager\ListTrafficPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'DENY' $DefaultAction
 * @property string $TrafficPolicyId
 * @property string $TrafficPolicyName
 */
class TrafficPolicy extends Shape
{
    /**
     * @param array{
     *     DefaultAction: 'ALLOW'|'DENY',
     *     TrafficPolicyId: string,
     *     TrafficPolicyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

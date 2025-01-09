<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeClientVpnIngress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'authorizing'|'active'|'failed'|'revoking' $Code
 * @property string $Message
 */
class ClientVpnAuthorizationRuleStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'authorizing'|'active'|'failed'|'revoking',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

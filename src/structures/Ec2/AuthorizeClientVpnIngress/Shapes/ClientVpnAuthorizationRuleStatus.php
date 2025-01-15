<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeClientVpnIngress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'authorizing'|'active'|'failed'|'revoking'|null $Code
 * @property string|null $Message
 */
class ClientVpnAuthorizationRuleStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'authorizing'|'active'|'failed'|'revoking'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

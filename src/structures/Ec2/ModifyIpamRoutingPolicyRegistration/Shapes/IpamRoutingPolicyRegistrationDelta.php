<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamRoutingPolicyRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeltaId
 * @property string|null $DeltaJson
 * @property 'pending'|'published'|'failed'|null $State
 * @property string|null $StateMessage
 */
class IpamRoutingPolicyRegistrationDelta extends Shape
{
    /**
     * @param array{
     *     DeltaId?: string|null,
     *     DeltaJson?: string|null,
     *     State?: 'pending'|'published'|'failed'|null,
     *     StateMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

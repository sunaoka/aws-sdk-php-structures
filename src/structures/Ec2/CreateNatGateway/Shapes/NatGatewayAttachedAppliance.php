<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNatGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'network-firewall-proxy'|null $Type
 * @property string|null $ApplianceArn
 * @property string|null $VpcEndpointId
 * @property 'attaching'|'attached'|'detaching'|'detached'|'attach-failed'|'detach-failed'|null $AttachmentState
 * @property 'modifying'|'completed'|'failed'|null $ModificationState
 * @property string|null $FailureCode
 * @property string|null $FailureMessage
 */
class NatGatewayAttachedAppliance extends Shape
{
    /**
     * @param array{
     *     Type?: 'network-firewall-proxy'|null,
     *     ApplianceArn?: string|null,
     *     VpcEndpointId?: string|null,
     *     AttachmentState?: 'attaching'|'attached'|'detaching'|'detached'|'attach-failed'|'detach-failed'|null,
     *     ModificationState?: 'modifying'|'completed'|'failed'|null,
     *     FailureCode?: string|null,
     *     FailureMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayVpcAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enable'|'disable'|null $DnsSupport
 * @property 'enable'|'disable'|null $SecurityGroupReferencingSupport
 * @property 'enable'|'disable'|null $Ipv6Support
 * @property 'enable'|'disable'|null $ApplianceModeSupport
 */
class TransitGatewayVpcAttachmentOptions extends Shape
{
    /**
     * @param array{
     *     DnsSupport?: 'enable'|'disable'|null,
     *     SecurityGroupReferencingSupport?: 'enable'|'disable'|null,
     *     Ipv6Support?: 'enable'|'disable'|null,
     *     ApplianceModeSupport?: 'enable'|'disable'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

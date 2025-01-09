<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptTransitGatewayVpcAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enable'|'disable' $DnsSupport
 * @property 'enable'|'disable' $SecurityGroupReferencingSupport
 * @property 'enable'|'disable' $Ipv6Support
 * @property 'enable'|'disable' $ApplianceModeSupport
 */
class TransitGatewayVpcAttachmentOptions extends Shape
{
    /**
     * @param array{
     *     DnsSupport?: 'enable'|'disable',
     *     SecurityGroupReferencingSupport?: 'enable'|'disable',
     *     Ipv6Support?: 'enable'|'disable',
     *     ApplianceModeSupport?: 'enable'|'disable'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

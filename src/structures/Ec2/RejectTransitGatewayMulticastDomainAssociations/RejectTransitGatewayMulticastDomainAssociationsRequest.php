<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectTransitGatewayMulticastDomainAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TransitGatewayMulticastDomainId
 * @property string|null $TransitGatewayAttachmentId
 * @property list<string>|null $SubnetIds
 * @property bool|null $DryRun
 */
class RejectTransitGatewayMulticastDomainAssociationsRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId?: string|null,
     *     TransitGatewayAttachmentId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

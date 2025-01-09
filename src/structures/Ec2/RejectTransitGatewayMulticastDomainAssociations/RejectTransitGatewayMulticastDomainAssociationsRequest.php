<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectTransitGatewayMulticastDomainAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayMulticastDomainId
 * @property string $TransitGatewayAttachmentId
 * @property list<string> $SubnetIds
 * @property bool $DryRun
 */
class RejectTransitGatewayMulticastDomainAssociationsRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId?: string,
     *     TransitGatewayAttachmentId?: string,
     *     SubnetIds?: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

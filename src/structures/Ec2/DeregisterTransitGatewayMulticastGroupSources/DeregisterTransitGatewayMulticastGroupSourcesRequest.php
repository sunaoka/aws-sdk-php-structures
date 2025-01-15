<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterTransitGatewayMulticastGroupSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TransitGatewayMulticastDomainId
 * @property string|null $GroupIpAddress
 * @property list<string>|null $NetworkInterfaceIds
 * @property bool|null $DryRun
 */
class DeregisterTransitGatewayMulticastGroupSourcesRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId?: string|null,
     *     GroupIpAddress?: string|null,
     *     NetworkInterfaceIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

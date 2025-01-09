<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterTransitGatewayMulticastGroupSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayMulticastDomainId
 * @property string $GroupIpAddress
 * @property list<string> $NetworkInterfaceIds
 * @property bool $DryRun
 */
class RegisterTransitGatewayMulticastGroupSourcesRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId: string,
     *     GroupIpAddress?: string,
     *     NetworkInterfaceIds: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

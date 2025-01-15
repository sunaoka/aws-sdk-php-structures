<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterTransitGatewayMulticastGroupSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayMulticastDomainId
 * @property string|null $GroupIpAddress
 * @property list<string> $NetworkInterfaceIds
 * @property bool|null $DryRun
 */
class RegisterTransitGatewayMulticastGroupSourcesRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId: string,
     *     GroupIpAddress?: string|null,
     *     NetworkInterfaceIds: list<string>,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

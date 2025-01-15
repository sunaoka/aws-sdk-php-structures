<?php

namespace Sunaoka\Aws\Structures\FMS\ListThirdPartyFirewallFirewallPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PALO_ALTO_NETWORKS_CLOUD_NGFW'|'FORTIGATE_CLOUD_NATIVE_FIREWALL' $ThirdPartyFirewall
 * @property string|null $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListThirdPartyFirewallFirewallPoliciesRequest extends Request
{
    /**
     * @param array{
     *     ThirdPartyFirewall: 'PALO_ALTO_NETWORKS_CLOUD_NGFW'|'FORTIGATE_CLOUD_NATIVE_FIREWALL',
     *     NextToken?: string|null,
     *     MaxResults: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

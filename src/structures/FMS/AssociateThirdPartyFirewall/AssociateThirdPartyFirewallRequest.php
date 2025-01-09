<?php

namespace Sunaoka\Aws\Structures\FMS\AssociateThirdPartyFirewall;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PALO_ALTO_NETWORKS_CLOUD_NGFW'|'FORTIGATE_CLOUD_NATIVE_FIREWALL' $ThirdPartyFirewall
 */
class AssociateThirdPartyFirewallRequest extends Request
{
    /**
     * @param array{ThirdPartyFirewall: 'PALO_ALTO_NETWORKS_CLOUD_NGFW'|'FORTIGATE_CLOUD_NATIVE_FIREWALL'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

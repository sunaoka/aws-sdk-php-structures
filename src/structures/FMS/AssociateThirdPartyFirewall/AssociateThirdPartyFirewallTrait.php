<?php

namespace Sunaoka\Aws\Structures\FMS\AssociateThirdPartyFirewall;

trait AssociateThirdPartyFirewallTrait
{
    /**
     * @param AssociateThirdPartyFirewallRequest $args
     * @return AssociateThirdPartyFirewallResponse
     */
    public function associateThirdPartyFirewall(AssociateThirdPartyFirewallRequest $args)
    {
        $result = parent::associateThirdPartyFirewall($args->toArray());
        return new AssociateThirdPartyFirewallResponse($result->toArray());
    }
}

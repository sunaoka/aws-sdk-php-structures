<?php

namespace Sunaoka\Aws\Structures\FMS\DisassociateThirdPartyFirewall;

trait DisassociateThirdPartyFirewallTrait
{
    /**
     * @param DisassociateThirdPartyFirewallRequest $args
     * @return DisassociateThirdPartyFirewallResponse
     */
    public function disassociateThirdPartyFirewall(DisassociateThirdPartyFirewallRequest $args)
    {
        $result = parent::disassociateThirdPartyFirewall($args->toArray());
        return new DisassociateThirdPartyFirewallResponse($result->toArray());
    }
}

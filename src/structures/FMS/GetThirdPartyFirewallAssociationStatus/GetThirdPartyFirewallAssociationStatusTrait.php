<?php

namespace Sunaoka\Aws\Structures\FMS\GetThirdPartyFirewallAssociationStatus;

trait GetThirdPartyFirewallAssociationStatusTrait
{
    /**
     * @param GetThirdPartyFirewallAssociationStatusRequest $args
     * @return GetThirdPartyFirewallAssociationStatusResponse
     */
    public function getThirdPartyFirewallAssociationStatus(GetThirdPartyFirewallAssociationStatusRequest $args)
    {
        $result = parent::getThirdPartyFirewallAssociationStatus($args->toArray());
        return new GetThirdPartyFirewallAssociationStatusResponse($result->toArray());
    }
}

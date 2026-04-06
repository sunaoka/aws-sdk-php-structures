<?php

namespace Sunaoka\Aws\Structures\Iam\GetOutboundWebIdentityFederationInfo;

trait GetOutboundWebIdentityFederationInfoTrait
{
    /**
     * @return GetOutboundWebIdentityFederationInfoResponse
     */
    public function getOutboundWebIdentityFederationInfo()
    {
        $result = parent::getOutboundWebIdentityFederationInfo();
        return new GetOutboundWebIdentityFederationInfoResponse($result->toArray());
    }
}

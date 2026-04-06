<?php

namespace Sunaoka\Aws\Structures\Iam\EnableOutboundWebIdentityFederation;

trait EnableOutboundWebIdentityFederationTrait
{
    /**
     * @return EnableOutboundWebIdentityFederationResponse
     */
    public function enableOutboundWebIdentityFederation()
    {
        $result = parent::enableOutboundWebIdentityFederation();
        return new EnableOutboundWebIdentityFederationResponse($result->toArray());
    }
}

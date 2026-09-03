<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetConsentPortal;

trait GetConsentPortalTrait
{
    /**
     * @param GetConsentPortalRequest $args
     * @return GetConsentPortalResponse
     */
    public function getConsentPortal(GetConsentPortalRequest $args)
    {
        $result = parent::getConsentPortal($args->toArray());
        return new GetConsentPortalResponse($result->toArray());
    }
}

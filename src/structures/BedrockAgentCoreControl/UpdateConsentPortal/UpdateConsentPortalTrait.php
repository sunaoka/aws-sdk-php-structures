<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateConsentPortal;

trait UpdateConsentPortalTrait
{
    /**
     * @param UpdateConsentPortalRequest $args
     * @return UpdateConsentPortalResponse
     */
    public function updateConsentPortal(UpdateConsentPortalRequest $args)
    {
        $result = parent::updateConsentPortal($args->toArray());
        return new UpdateConsentPortalResponse($result->toArray());
    }
}

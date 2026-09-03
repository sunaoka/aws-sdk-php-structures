<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteConsentPortal;

trait DeleteConsentPortalTrait
{
    /**
     * @param DeleteConsentPortalRequest $args
     * @return DeleteConsentPortalResponse
     */
    public function deleteConsentPortal(DeleteConsentPortalRequest $args)
    {
        $result = parent::deleteConsentPortal($args->toArray());
        return new DeleteConsentPortalResponse($result->toArray());
    }
}

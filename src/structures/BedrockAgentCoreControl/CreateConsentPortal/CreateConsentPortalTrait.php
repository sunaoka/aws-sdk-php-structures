<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateConsentPortal;

trait CreateConsentPortalTrait
{
    /**
     * @param CreateConsentPortalRequest $args
     * @return CreateConsentPortalResponse
     */
    public function createConsentPortal(CreateConsentPortalRequest $args)
    {
        $result = parent::createConsentPortal($args->toArray());
        return new CreateConsentPortalResponse($result->toArray());
    }
}

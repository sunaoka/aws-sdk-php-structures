<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListConsentPortals;

trait ListConsentPortalsTrait
{
    /**
     * @param ListConsentPortalsRequest $args
     * @return ListConsentPortalsResponse
     */
    public function listConsentPortals(ListConsentPortalsRequest $args)
    {
        $result = parent::listConsentPortals($args->toArray());
        return new ListConsentPortalsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\CodePipeline\DeregisterWebhookWithThirdParty;

trait DeregisterWebhookWithThirdPartyTrait
{
    /**
     * @param DeregisterWebhookWithThirdPartyRequest $args
     * @return DeregisterWebhookWithThirdPartyResponse
     */
    public function deregisterWebhookWithThirdParty(DeregisterWebhookWithThirdPartyRequest $args)
    {
        $result = parent::deregisterWebhookWithThirdParty($args->toArray());
        return new DeregisterWebhookWithThirdPartyResponse($result->toArray());
    }
}

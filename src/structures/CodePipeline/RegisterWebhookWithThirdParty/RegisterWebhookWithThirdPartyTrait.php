<?php

namespace Sunaoka\Aws\Structures\CodePipeline\RegisterWebhookWithThirdParty;

trait RegisterWebhookWithThirdPartyTrait
{
    /**
     * @param RegisterWebhookWithThirdPartyRequest $args
     * @return RegisterWebhookWithThirdPartyResponse
     */
    public function registerWebhookWithThirdParty(RegisterWebhookWithThirdPartyRequest $args)
    {
        $result = parent::registerWebhookWithThirdParty($args->toArray());
        return new RegisterWebhookWithThirdPartyResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Amplify\GetWebhook;

trait GetWebhookTrait
{
    /**
     * @param GetWebhookRequest $args
     * @return GetWebhookResponse
     */
    public function getWebhook(GetWebhookRequest $args)
    {
        $result = parent::getWebhook($args->toArray());
        return new GetWebhookResponse($result->toArray());
    }
}

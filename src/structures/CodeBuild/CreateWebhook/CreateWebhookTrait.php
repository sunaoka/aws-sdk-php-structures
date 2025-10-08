<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateWebhook;

trait CreateWebhookTrait
{
    /**
     * @param CreateWebhookRequest $args
     * @return CreateWebhookResponse
     */
    public function createWebhook(CreateWebhookRequest $args)
    {
        $result = parent::createWebhook($args->toArray());
        return new CreateWebhookResponse($result->toArray());
    }
}

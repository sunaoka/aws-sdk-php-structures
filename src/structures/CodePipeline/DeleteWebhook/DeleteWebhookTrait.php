<?php

namespace Sunaoka\Aws\Structures\CodePipeline\DeleteWebhook;

trait DeleteWebhookTrait
{
    /**
     * @param DeleteWebhookRequest $args
     * @return DeleteWebhookResponse
     */
    public function deleteWebhook(DeleteWebhookRequest $args)
    {
        $result = parent::deleteWebhook($args->toArray());
        return new DeleteWebhookResponse($result->toArray());
    }
}

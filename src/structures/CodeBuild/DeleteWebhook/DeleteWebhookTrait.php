<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteWebhook;

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

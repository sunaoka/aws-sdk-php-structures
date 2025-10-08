<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateWebhook;

trait UpdateWebhookTrait
{
    /**
     * @param UpdateWebhookRequest $args
     * @return UpdateWebhookResponse
     */
    public function updateWebhook(UpdateWebhookRequest $args)
    {
        $result = parent::updateWebhook($args->toArray());
        return new UpdateWebhookResponse($result->toArray());
    }
}

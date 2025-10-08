<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutWebhook;

trait PutWebhookTrait
{
    /**
     * @param PutWebhookRequest $args
     * @return PutWebhookResponse
     */
    public function putWebhook(PutWebhookRequest $args)
    {
        $result = parent::putWebhook($args->toArray());
        return new PutWebhookResponse($result->toArray());
    }
}

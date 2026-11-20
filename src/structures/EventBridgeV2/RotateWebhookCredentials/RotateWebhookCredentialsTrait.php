<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\RotateWebhookCredentials;

trait RotateWebhookCredentialsTrait
{
    /**
     * @param RotateWebhookCredentialsRequest $args
     * @return RotateWebhookCredentialsResponse
     */
    public function rotateWebhookCredentials(RotateWebhookCredentialsRequest $args)
    {
        $result = parent::rotateWebhookCredentials($args->toArray());
        return new RotateWebhookCredentialsResponse($result->toArray());
    }
}

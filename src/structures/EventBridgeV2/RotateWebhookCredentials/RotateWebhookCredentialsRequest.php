<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\RotateWebhookCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSourceArn
 * @property Shapes\WebhookCredential|null $Credential
 * @property string|null $ClientToken
 */
class RotateWebhookCredentialsRequest extends Request
{
    /**
     * @param array{
     *     EventSourceArn: string,
     *     Credential?: Shapes\WebhookCredential|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $webhookId
 */
class DeleteWebhookRequest extends Request
{
    /**
     * @param array{webhookId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

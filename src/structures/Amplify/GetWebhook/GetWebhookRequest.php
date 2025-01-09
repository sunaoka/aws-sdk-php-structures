<?php

namespace Sunaoka\Aws\Structures\Amplify\GetWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $webhookId
 */
class GetWebhookRequest extends Request
{
    /**
     * @param array{webhookId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

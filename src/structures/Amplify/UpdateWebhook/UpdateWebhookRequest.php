<?php

namespace Sunaoka\Aws\Structures\Amplify\UpdateWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $webhookId
 * @property string $branchName
 * @property string $description
 */
class UpdateWebhookRequest extends Request
{
    /**
     * @param array{
     *     webhookId: string,
     *     branchName?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

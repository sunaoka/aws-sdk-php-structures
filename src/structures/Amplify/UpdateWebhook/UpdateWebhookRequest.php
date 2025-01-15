<?php

namespace Sunaoka\Aws\Structures\Amplify\UpdateWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $webhookId
 * @property string|null $branchName
 * @property string|null $description
 */
class UpdateWebhookRequest extends Request
{
    /**
     * @param array{
     *     webhookId: string,
     *     branchName?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

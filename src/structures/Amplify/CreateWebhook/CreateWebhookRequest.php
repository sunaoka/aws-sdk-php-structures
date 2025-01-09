<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property string $description
 */
class CreateWebhookRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

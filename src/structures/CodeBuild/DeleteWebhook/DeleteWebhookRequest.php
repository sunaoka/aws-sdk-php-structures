<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 */
class DeleteWebhookRequest extends Request
{
    /**
     * @param array{projectName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

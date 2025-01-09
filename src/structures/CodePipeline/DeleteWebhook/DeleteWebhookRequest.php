<?php

namespace Sunaoka\Aws\Structures\CodePipeline\DeleteWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteWebhookRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

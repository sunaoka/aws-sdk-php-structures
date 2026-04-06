<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteChimeWebhookConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 */
class DeleteChimeWebhookConfigurationRequest extends Request
{
    /**
     * @param array{ChatConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

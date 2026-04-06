<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteSlackChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 */
class DeleteSlackChannelConfigurationRequest extends Request
{
    /**
     * @param array{ChatConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

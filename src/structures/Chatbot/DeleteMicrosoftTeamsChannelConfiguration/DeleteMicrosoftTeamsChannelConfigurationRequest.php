<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteMicrosoftTeamsChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 */
class DeleteMicrosoftTeamsChannelConfigurationRequest extends Request
{
    /**
     * @param array{ChatConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

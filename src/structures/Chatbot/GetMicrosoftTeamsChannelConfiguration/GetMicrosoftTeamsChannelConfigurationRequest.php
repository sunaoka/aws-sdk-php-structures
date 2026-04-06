<?php

namespace Sunaoka\Aws\Structures\Chatbot\GetMicrosoftTeamsChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 */
class GetMicrosoftTeamsChannelConfigurationRequest extends Request
{
    /**
     * @param array{ChatConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

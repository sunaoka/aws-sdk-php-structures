<?php

namespace Sunaoka\Aws\Structures\SupportApp\DeleteSlackChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelId
 * @property string $teamId
 */
class DeleteSlackChannelConfigurationRequest extends Request
{
    /**
     * @param array{
     *     channelId: string,
     *     teamId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignChannelSubtypeConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\ChannelSubtypeConfig $channelSubtypeConfig
 */
class UpdateCampaignChannelSubtypeConfigRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     channelSubtypeConfig: Shapes\ChannelSubtypeConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelsAssociatedWithChannelFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelFlowArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListChannelsAssociatedWithChannelFlowRequest extends Request
{
    /**
     * @param array{
     *     ChannelFlowArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

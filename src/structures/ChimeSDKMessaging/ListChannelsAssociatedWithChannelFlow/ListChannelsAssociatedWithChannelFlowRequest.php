<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelsAssociatedWithChannelFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelFlowArn
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListChannelsAssociatedWithChannelFlowRequest extends Request
{
    /**
     * @param array{
     *     ChannelFlowArn: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

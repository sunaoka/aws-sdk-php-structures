<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelsAssociatedWithChannelFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelFlowArn
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListChannelsAssociatedWithChannelFlowRequest extends Request
{
    /**
     * @param array{
     *     ChannelFlowArn: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

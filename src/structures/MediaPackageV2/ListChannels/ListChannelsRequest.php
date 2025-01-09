<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListChannelsRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

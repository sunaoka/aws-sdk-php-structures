<?php

namespace Sunaoka\Aws\Structures\IVS\ListChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $filterByName
 * @property string $filterByPlaybackRestrictionPolicyArn
 * @property string $filterByRecordingConfigurationArn
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListChannelsRequest extends Request
{
    /**
     * @param array{
     *     filterByName?: string,
     *     filterByPlaybackRestrictionPolicyArn?: string,
     *     filterByRecordingConfigurationArn?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

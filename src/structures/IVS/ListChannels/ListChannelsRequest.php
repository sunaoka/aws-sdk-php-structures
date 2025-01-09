<?php

namespace Sunaoka\Aws\Structures\IVS\ListChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $filterByName
 * @property string $filterByPlaybackRestrictionPolicyArn
 * @property string $filterByRecordingConfigurationArn
 * @property int $maxResults
 * @property string $nextToken
 */
class ListChannelsRequest extends Request
{
    /**
     * @param array{
     *     filterByName?: string,
     *     filterByPlaybackRestrictionPolicyArn?: string,
     *     filterByRecordingConfigurationArn?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

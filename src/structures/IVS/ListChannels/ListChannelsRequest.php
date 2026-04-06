<?php

namespace Sunaoka\Aws\Structures\IVS\ListChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $filterByName
 * @property string|null $filterByRecordingConfigurationArn
 * @property string|null $filterByPlaybackRestrictionPolicyArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListChannelsRequest extends Request
{
    /**
     * @param array{
     *     filterByName?: string|null,
     *     filterByRecordingConfigurationArn?: string|null,
     *     filterByPlaybackRestrictionPolicyArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

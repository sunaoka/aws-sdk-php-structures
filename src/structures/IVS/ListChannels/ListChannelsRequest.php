<?php

namespace Sunaoka\Aws\Structures\IVS\ListChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $filterByName
 * @property string|null $filterByPlaybackRestrictionPolicyArn
 * @property string|null $filterByRecordingConfigurationArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListChannelsRequest extends Request
{
    /**
     * @param array{
     *     filterByName?: string|null,
     *     filterByPlaybackRestrictionPolicyArn?: string|null,
     *     filterByRecordingConfigurationArn?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

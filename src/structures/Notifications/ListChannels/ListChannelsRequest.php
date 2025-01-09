<?php

namespace Sunaoka\Aws\Structures\Notifications\ListChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $notificationConfigurationArn
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListChannelsRequest extends Request
{
    /**
     * @param array{
     *     notificationConfigurationArn: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

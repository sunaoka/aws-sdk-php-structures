<?php

namespace Sunaoka\Aws\Structures\Repostspace\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $channelId
 * @property string $channelName
 * @property string|null $channelDescription
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     channelId: string,
     *     channelName: string,
     *     channelDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

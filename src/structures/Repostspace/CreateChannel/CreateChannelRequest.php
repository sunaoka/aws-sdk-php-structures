<?php

namespace Sunaoka\Aws\Structures\Repostspace\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $channelName
 * @property string|null $channelDescription
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     channelName: string,
     *     channelDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Repostspace\GetChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $channelId
 */
class GetChannelRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     channelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

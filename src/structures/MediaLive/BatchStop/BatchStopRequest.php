<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchStop;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ChannelIds
 * @property list<string>|null $MultiplexIds
 */
class BatchStopRequest extends Request
{
    /**
     * @param array{
     *     ChannelIds?: list<string>|null,
     *     MultiplexIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

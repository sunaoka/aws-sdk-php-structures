<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchStop;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ChannelIds
 * @property list<string> $MultiplexIds
 */
class BatchStopRequest extends Request
{
    /**
     * @param array{
     *     ChannelIds?: list<string>,
     *     MultiplexIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

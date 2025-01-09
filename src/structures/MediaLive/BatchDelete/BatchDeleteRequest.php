<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchDelete;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ChannelIds
 * @property list<string> $InputIds
 * @property list<string> $InputSecurityGroupIds
 * @property list<string> $MultiplexIds
 */
class BatchDeleteRequest extends Request
{
    /**
     * @param array{
     *     ChannelIds?: list<string>,
     *     InputIds?: list<string>,
     *     InputSecurityGroupIds?: list<string>,
     *     MultiplexIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

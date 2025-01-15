<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchDelete;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ChannelIds
 * @property list<string>|null $InputIds
 * @property list<string>|null $InputSecurityGroupIds
 * @property list<string>|null $MultiplexIds
 */
class BatchDeleteRequest extends Request
{
    /**
     * @param array{
     *     ChannelIds?: list<string>|null,
     *     InputIds?: list<string>|null,
     *     InputSecurityGroupIds?: list<string>|null,
     *     MultiplexIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

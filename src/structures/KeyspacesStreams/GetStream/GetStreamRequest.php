<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $streamArn
 * @property int<1, 100>|null $maxResults
 * @property Shapes\ShardFilter|null $shardFilter
 * @property string|null $nextToken
 */
class GetStreamRequest extends Request
{
    /**
     * @param array{
     *     streamArn: string,
     *     maxResults?: int<1, 100>|null,
     *     shardFilter?: Shapes\ShardFilter|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

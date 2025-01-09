<?php

namespace Sunaoka\Aws\Structures\MemoryDB\FailoverShard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $ShardName
 */
class FailoverShardRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     ShardName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

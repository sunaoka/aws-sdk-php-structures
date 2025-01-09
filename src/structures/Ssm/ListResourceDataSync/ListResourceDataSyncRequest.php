<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceDataSync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SyncType
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListResourceDataSyncRequest extends Request
{
    /**
     * @param array{
     *     SyncType?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

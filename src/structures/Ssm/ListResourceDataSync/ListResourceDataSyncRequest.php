<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceDataSync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SyncType
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListResourceDataSyncRequest extends Request
{
    /**
     * @param array{
     *     SyncType?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamSessionsByAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACTIVATING'|'ACTIVE'|'CONNECTED'|'PENDING_CLIENT_RECONNECTION'|'RECONNECTING'|'TERMINATING'|'TERMINATED'|'ERROR'|null $Status
 * @property 'SUCCEEDED'|'FAILED'|'PENDING'|null $ExportFilesStatus
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListStreamSessionsByAccountRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'ACTIVATING'|'ACTIVE'|'CONNECTED'|'PENDING_CLIENT_RECONNECTION'|'RECONNECTING'|'TERMINATING'|'TERMINATED'|'ERROR'|null,
     *     ExportFilesStatus?: 'SUCCEEDED'|'FAILED'|'PENDING'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

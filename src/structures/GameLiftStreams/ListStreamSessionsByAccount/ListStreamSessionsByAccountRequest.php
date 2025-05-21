<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamSessionsByAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SUCCEEDED'|'FAILED'|'PENDING'|null $ExportFilesStatus
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'ACTIVATING'|'ACTIVE'|'CONNECTED'|'PENDING_CLIENT_RECONNECTION'|'RECONNECTING'|'TERMINATING'|'TERMINATED'|'ERROR'|null $Status
 */
class ListStreamSessionsByAccountRequest extends Request
{
    /**
     * @param array{
     *     ExportFilesStatus?: 'SUCCEEDED'|'FAILED'|'PENDING'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Status?: 'ACTIVATING'|'ACTIVE'|'CONNECTED'|'PENDING_CLIENT_RECONNECTION'|'RECONNECTING'|'TERMINATING'|'TERMINATED'|'ERROR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

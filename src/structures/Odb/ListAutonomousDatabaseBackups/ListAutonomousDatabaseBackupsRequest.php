<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string $autonomousDatabaseId
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $status
 * @property 'INCREMENTAL'|'FULL'|'LONGTERM'|'VIRTUAL_FULL'|'CUMULATIVE_INCREMENTAL'|'ROLL_FORWARD_IMAGE_COPY'|null $type
 */
class ListAutonomousDatabaseBackupsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     autonomousDatabaseId: string,
     *     status?: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null,
     *     type?: 'INCREMENTAL'|'FULL'|'LONGTERM'|'VIRTUAL_FULL'|'CUMULATIVE_INCREMENTAL'|'ROLL_FORWARD_IMAGE_COPY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\RAM\ListReplacePermissionAssociationsWork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $workIds
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $status
 * @property string $nextToken
 * @property int $maxResults
 */
class ListReplacePermissionAssociationsWorkRequest extends Request
{
    /**
     * @param array{
     *     workIds?: list<string>,
     *     status?: 'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

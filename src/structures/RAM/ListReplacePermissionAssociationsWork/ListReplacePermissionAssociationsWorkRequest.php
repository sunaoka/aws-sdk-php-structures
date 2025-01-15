<?php

namespace Sunaoka\Aws\Structures\RAM\ListReplacePermissionAssociationsWork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $workIds
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $status
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 */
class ListReplacePermissionAssociationsWorkRequest extends Request
{
    /**
     * @param array{
     *     workIds?: list<string>|null,
     *     status?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

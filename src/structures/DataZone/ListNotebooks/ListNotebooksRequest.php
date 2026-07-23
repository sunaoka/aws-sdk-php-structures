<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotebooks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $owningProjectIdentifier
 * @property int<1, 50>|null $maxResults
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property 'CREATED_AT'|'UPDATED_AT'|null $sortBy
 * @property 'ACTIVE'|'ARCHIVED'|'SYNC_IN_PROGRESS'|'SYNC_FAILED'|null $status
 * @property string|null $nextToken
 */
class ListNotebooksRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     owningProjectIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     sortBy?: 'CREATED_AT'|'UPDATED_AT'|null,
     *     status?: 'ACTIVE'|'ARCHIVED'|'SYNC_IN_PROGRESS'|'SYNC_FAILED'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

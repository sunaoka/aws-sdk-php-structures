<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property list<'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'> $statuses
 * @property int $maxResults
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     statuses?: list<'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'>,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

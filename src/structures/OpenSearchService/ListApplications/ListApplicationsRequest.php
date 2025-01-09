<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property list<'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'> $statuses
 * @property int<min, 100> $maxResults
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     statuses?: list<'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'>,
     *     maxResults?: int<min, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

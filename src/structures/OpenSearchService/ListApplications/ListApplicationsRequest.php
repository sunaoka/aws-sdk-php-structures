<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property list<'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'>|null $statuses
 * @property int<min, 100>|null $maxResults
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     statuses?: list<'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'>|null,
     *     maxResults?: int<min, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\mgn\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property Shapes\ListApplicationsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     filters?: Shapes\ListApplicationsRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

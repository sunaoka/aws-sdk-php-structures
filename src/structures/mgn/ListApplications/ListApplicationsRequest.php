<?php

namespace Sunaoka\Aws\Structures\mgn\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListApplicationsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $accountID
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListApplicationsRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

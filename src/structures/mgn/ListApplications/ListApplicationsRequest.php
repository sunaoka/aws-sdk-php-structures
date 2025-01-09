<?php

namespace Sunaoka\Aws\Structures\mgn\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property Shapes\ListApplicationsRequestFilters $filters
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     filters?: Shapes\ListApplicationsRequestFilters,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

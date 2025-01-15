<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSharedReportGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property 'ARN'|'MODIFIED_TIME'|null $sortBy
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListSharedReportGroupsRequest extends Request
{
    /**
     * @param array{
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     sortBy?: 'ARN'|'MODIFIED_TIME'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

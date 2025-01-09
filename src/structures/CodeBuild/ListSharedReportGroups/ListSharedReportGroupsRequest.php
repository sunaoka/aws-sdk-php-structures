<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSharedReportGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property 'ARN'|'MODIFIED_TIME' $sortBy
 * @property string $nextToken
 * @property int $maxResults
 */
class ListSharedReportGroupsRequest extends Request
{
    /**
     * @param array{
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     sortBy?: 'ARN'|'MODIFIED_TIME',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

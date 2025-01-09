<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListReportGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property 'NAME'|'CREATED_TIME'|'LAST_MODIFIED_TIME' $sortBy
 * @property string $nextToken
 * @property int $maxResults
 */
class ListReportGroupsRequest extends Request
{
    /**
     * @param array{
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     sortBy?: 'NAME'|'CREATED_TIME'|'LAST_MODIFIED_TIME',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

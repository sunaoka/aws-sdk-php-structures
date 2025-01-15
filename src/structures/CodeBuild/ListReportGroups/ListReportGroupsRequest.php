<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListReportGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property 'NAME'|'CREATED_TIME'|'LAST_MODIFIED_TIME'|null $sortBy
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListReportGroupsRequest extends Request
{
    /**
     * @param array{
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     sortBy?: 'NAME'|'CREATED_TIME'|'LAST_MODIFIED_TIME'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

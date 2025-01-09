<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property 'NAME'|'CREATED_TIME'|'LAST_MODIFIED_TIME' $sortBy
 */
class ListFleetsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     sortBy?: 'NAME'|'CREATED_TIME'|'LAST_MODIFIED_TIME'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

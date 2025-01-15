<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property 'NAME'|'CREATED_TIME'|'LAST_MODIFIED_TIME'|null $sortBy
 */
class ListFleetsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     sortBy?: 'NAME'|'CREATED_TIME'|'LAST_MODIFIED_TIME'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

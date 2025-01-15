<?php

namespace Sunaoka\Aws\Structures\Macie2\ListFindingsFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListFindingsFiltersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

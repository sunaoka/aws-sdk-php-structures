<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FilterCriteria $filterCriteria
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property Shapes\SortCriteria $sortCriteria
 */
class ListFindingsRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\FilterCriteria,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     sortCriteria?: Shapes\SortCriteria
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

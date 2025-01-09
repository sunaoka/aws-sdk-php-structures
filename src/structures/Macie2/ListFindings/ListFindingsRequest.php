<?php

namespace Sunaoka\Aws\Structures\Macie2\ListFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FindingCriteria $findingCriteria
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\SortCriteria $sortCriteria
 */
class ListFindingsRequest extends Request
{
    /**
     * @param array{
     *     findingCriteria?: Shapes\FindingCriteria,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sortCriteria?: Shapes\SortCriteria
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

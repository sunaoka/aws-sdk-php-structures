<?php

namespace Sunaoka\Aws\Structures\Macie2\ListFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FindingCriteria|null $findingCriteria
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\SortCriteria|null $sortCriteria
 */
class ListFindingsRequest extends Request
{
    /**
     * @param array{
     *     findingCriteria?: Shapes\FindingCriteria|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     sortCriteria?: Shapes\SortCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

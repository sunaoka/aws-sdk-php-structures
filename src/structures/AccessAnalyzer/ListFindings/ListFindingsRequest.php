<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property array<string, Shapes\Criterion> $filter
 * @property Shapes\SortCriteria $sort
 * @property string $nextToken
 * @property int $maxResults
 */
class ListFindingsRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     filter?: array<string, Shapes\Criterion>,
     *     sort?: Shapes\SortCriteria,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

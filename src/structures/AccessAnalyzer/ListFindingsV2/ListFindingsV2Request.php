<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListFindingsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property array<string, Shapes\Criterion> $filter
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\SortCriteria $sort
 */
class ListFindingsV2Request extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     filter?: array<string, Shapes\Criterion>,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sort?: Shapes\SortCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

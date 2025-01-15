<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property list<string> $queueIds
 * @property Shapes\SearchGroupedFilterExpressions|null $filterExpressions
 * @property list<Shapes\SearchSortExpression>|null $sortExpressions
 * @property int<0, 10000> $itemOffset
 * @property int<1, 100>|null $pageSize
 */
class SearchJobsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueIds: list<string>,
     *     filterExpressions?: Shapes\SearchGroupedFilterExpressions|null,
     *     sortExpressions?: list<Shapes\SearchSortExpression>|null,
     *     itemOffset: int<0, 10000>,
     *     pageSize?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

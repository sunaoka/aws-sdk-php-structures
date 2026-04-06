<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property Shapes\SearchGroupedFilterExpressions|null $filterExpressions
 * @property int<0, 10000> $itemOffset
 * @property int<1, 100>|null $pageSize
 * @property list<string> $queueIds
 * @property list<Shapes\SearchSortExpression>|null $sortExpressions
 */
class SearchJobsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     filterExpressions?: Shapes\SearchGroupedFilterExpressions|null,
     *     itemOffset: int<0, 10000>,
     *     pageSize?: int<1, 100>|null,
     *     queueIds: list<string>,
     *     sortExpressions?: list<Shapes\SearchSortExpression>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property list<string> $queueIds
 * @property string|null $jobId
 * @property Shapes\SearchGroupedFilterExpressions|null $filterExpressions
 * @property list<Shapes\SearchSortExpression>|null $sortExpressions
 * @property int<0, 10000> $itemOffset
 * @property int<1, 100>|null $pageSize
 */
class SearchTasksRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueIds: list<string>,
     *     jobId?: string|null,
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

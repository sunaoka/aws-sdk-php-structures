<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property list<string> $queueIds
 * @property string $jobId
 * @property Shapes\SearchGroupedFilterExpressions $filterExpressions
 * @property list<Shapes\SearchSortExpression> $sortExpressions
 * @property int $itemOffset
 * @property int $pageSize
 */
class SearchStepsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueIds: list<string>,
     *     jobId?: string,
     *     filterExpressions?: Shapes\SearchGroupedFilterExpressions,
     *     sortExpressions?: list<Shapes\SearchSortExpression>,
     *     itemOffset: int,
     *     pageSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

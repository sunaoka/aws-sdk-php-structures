<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property list<string> $queueIds
 * @property string $jobId
 * @property Shapes\SearchGroupedFilterExpressions $filterExpressions
 * @property list<Shapes\SearchSortExpression> $sortExpressions
 * @property int<0, 10000> $itemOffset
 * @property int<1, 100> $pageSize
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
     *     itemOffset: int<0, 10000>,
     *     pageSize?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

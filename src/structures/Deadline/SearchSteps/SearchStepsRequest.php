<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property Shapes\SearchGroupedFilterExpressions|null $filterExpressions
 * @property list<Shapes\SearchSortExpression>|null $sortExpressions
 * @property int<0, 10000> $itemOffset
 * @property int<1, 100>|null $pageSize
 * @property list<string> $queueIds
 * @property string|null $jobId
 */
class SearchStepsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     filterExpressions?: Shapes\SearchGroupedFilterExpressions|null,
     *     sortExpressions?: list<Shapes\SearchSortExpression>|null,
     *     itemOffset: int<0, 10000>,
     *     pageSize?: int<1, 100>|null,
     *     queueIds: list<string>,
     *     jobId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

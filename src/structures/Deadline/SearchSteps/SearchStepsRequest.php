<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property Shapes\SearchGroupedFilterExpressions|null $filterExpressions
 * @property int<0, 10000> $itemOffset
 * @property string|null $jobId
 * @property int<1, 100>|null $pageSize
 * @property list<string> $queueIds
 * @property list<Shapes\SearchSortExpression>|null $sortExpressions
 */
class SearchStepsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     filterExpressions?: Shapes\SearchGroupedFilterExpressions|null,
     *     itemOffset: int<0, 10000>,
     *     jobId?: string|null,
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

<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchWorkers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property list<string> $fleetIds
 * @property Shapes\SearchGroupedFilterExpressions $filterExpressions
 * @property list<Shapes\SearchSortExpression> $sortExpressions
 * @property int $itemOffset
 * @property int $pageSize
 */
class SearchWorkersRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetIds: list<string>,
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

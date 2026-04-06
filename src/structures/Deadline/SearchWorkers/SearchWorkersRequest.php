<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchWorkers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property Shapes\SearchGroupedFilterExpressions|null $filterExpressions
 * @property list<string> $fleetIds
 * @property int<0, 10000> $itemOffset
 * @property int<1, 100>|null $pageSize
 * @property list<Shapes\SearchSortExpression>|null $sortExpressions
 */
class SearchWorkersRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     filterExpressions?: Shapes\SearchGroupedFilterExpressions|null,
     *     fleetIds: list<string>,
     *     itemOffset: int<0, 10000>,
     *     pageSize?: int<1, 100>|null,
     *     sortExpressions?: list<Shapes\SearchSortExpression>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

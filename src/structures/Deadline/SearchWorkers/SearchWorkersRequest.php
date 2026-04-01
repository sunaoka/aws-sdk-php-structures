<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchWorkers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property Shapes\SearchGroupedFilterExpressions|null $filterExpressions
 * @property list<Shapes\SearchSortExpression>|null $sortExpressions
 * @property int<0, 10000> $itemOffset
 * @property int<1, 100>|null $pageSize
 * @property list<string> $fleetIds
 */
class SearchWorkersRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     filterExpressions?: Shapes\SearchGroupedFilterExpressions|null,
     *     sortExpressions?: list<Shapes\SearchSortExpression>|null,
     *     itemOffset: int<0, 10000>,
     *     pageSize?: int<1, 100>|null,
     *     fleetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

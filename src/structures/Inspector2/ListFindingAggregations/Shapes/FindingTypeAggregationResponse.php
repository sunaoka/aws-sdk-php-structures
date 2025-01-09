<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property int $exploitAvailableCount
 * @property int $fixAvailableCount
 * @property SeverityCounts $severityCounts
 */
class FindingTypeAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     exploitAvailableCount?: int,
     *     fixAvailableCount?: int,
     *     severityCounts?: SeverityCounts
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

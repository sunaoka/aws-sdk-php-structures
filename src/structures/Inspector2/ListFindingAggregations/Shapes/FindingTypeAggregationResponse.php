<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property SeverityCounts|null $severityCounts
 * @property int|null $exploitAvailableCount
 * @property int|null $fixAvailableCount
 */
class FindingTypeAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     exploitAvailableCount?: int|null,
     *     fixAvailableCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

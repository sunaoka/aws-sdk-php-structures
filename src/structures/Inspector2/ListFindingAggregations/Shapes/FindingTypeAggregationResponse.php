<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property int|null $exploitAvailableCount
 * @property int|null $fixAvailableCount
 * @property SeverityCounts|null $severityCounts
 */
class FindingTypeAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     exploitAvailableCount?: int|null,
     *     fixAvailableCount?: int|null,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

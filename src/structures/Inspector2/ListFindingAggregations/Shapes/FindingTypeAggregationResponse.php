<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property SeverityCounts|null $severityCounts
 * @property int|null $exploitAvailableCount
 * @property int|null $fixAvailableCount
 * @property string|null $cloudProvider
 * @property string|null $cloudAccountId
 * @property string|null $cloudOrgId
 * @property string|null $cloudRegion
 * @property string|null $cloudPartition
 */
class FindingTypeAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     exploitAvailableCount?: int|null,
     *     fixAvailableCount?: int|null,
     *     cloudProvider?: string|null,
     *     cloudAccountId?: string|null,
     *     cloudOrgId?: string|null,
     *     cloudRegion?: string|null,
     *     cloudPartition?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

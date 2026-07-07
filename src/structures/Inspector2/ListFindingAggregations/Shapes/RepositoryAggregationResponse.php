<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repository
 * @property string|null $accountId
 * @property 'AWS'|'AZURE'|null $cloudProvider
 * @property string|null $cloudPartition
 * @property string|null $cloudRegion
 * @property string|null $cloudOrgId
 * @property string|null $cloudAccountId
 * @property SeverityCounts|null $severityCounts
 * @property int|null $affectedImages
 */
class RepositoryAggregationResponse extends Shape
{
    /**
     * @param array{
     *     repository: string,
     *     accountId?: string|null,
     *     cloudProvider?: 'AWS'|'AZURE'|null,
     *     cloudPartition?: string|null,
     *     cloudRegion?: string|null,
     *     cloudOrgId?: string|null,
     *     cloudAccountId?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     affectedImages?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

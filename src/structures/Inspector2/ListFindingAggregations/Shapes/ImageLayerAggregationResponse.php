<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repository
 * @property string $resourceId
 * @property string $layerHash
 * @property string $accountId
 * @property string|null $cloudProvider
 * @property string|null $cloudAccountId
 * @property string|null $cloudOrgId
 * @property string|null $cloudRegion
 * @property string|null $cloudPartition
 * @property SeverityCounts|null $severityCounts
 */
class ImageLayerAggregationResponse extends Shape
{
    /**
     * @param array{
     *     repository: string,
     *     resourceId: string,
     *     layerHash: string,
     *     accountId: string,
     *     cloudProvider?: string|null,
     *     cloudAccountId?: string|null,
     *     cloudOrgId?: string|null,
     *     cloudRegion?: string|null,
     *     cloudPartition?: string|null,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

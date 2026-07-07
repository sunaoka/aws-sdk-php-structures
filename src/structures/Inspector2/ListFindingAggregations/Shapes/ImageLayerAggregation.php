<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $repositories
 * @property list<StringFilter>|null $resourceIds
 * @property list<StringFilter>|null $layerHashes
 * @property list<StringFilter>|null $cloudProviders
 * @property list<StringFilter>|null $cloudAccountIds
 * @property list<StringFilter>|null $cloudOrgIds
 * @property list<StringFilter>|null $cloudRegions
 * @property list<StringFilter>|null $cloudPartitions
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 */
class ImageLayerAggregation extends Shape
{
    /**
     * @param array{
     *     repositories?: list<StringFilter>|null,
     *     resourceIds?: list<StringFilter>|null,
     *     layerHashes?: list<StringFilter>|null,
     *     cloudProviders?: list<StringFilter>|null,
     *     cloudAccountIds?: list<StringFilter>|null,
     *     cloudOrgIds?: list<StringFilter>|null,
     *     cloudRegions?: list<StringFilter>|null,
     *     cloudPartitions?: list<StringFilter>|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

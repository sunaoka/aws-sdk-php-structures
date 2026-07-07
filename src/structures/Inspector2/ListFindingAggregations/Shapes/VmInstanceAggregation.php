<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $resourceIds
 * @property list<StringFilter>|null $operatingSystems
 * @property list<MapFilter>|null $instanceTags
 * @property list<StringFilter>|null $vmImageReferences
 * @property list<StringFilter>|null $cloudProviders
 * @property list<StringFilter>|null $cloudPartitions
 * @property list<StringFilter>|null $cloudRegions
 * @property list<StringFilter>|null $cloudOrgIds
 * @property list<StringFilter>|null $cloudAccountIds
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'CRITICAL'|'HIGH'|'ALL'|'NETWORK_FINDINGS'|null $sortBy
 */
class VmInstanceAggregation extends Shape
{
    /**
     * @param array{
     *     resourceIds?: list<StringFilter>|null,
     *     operatingSystems?: list<StringFilter>|null,
     *     instanceTags?: list<MapFilter>|null,
     *     vmImageReferences?: list<StringFilter>|null,
     *     cloudProviders?: list<StringFilter>|null,
     *     cloudPartitions?: list<StringFilter>|null,
     *     cloudRegions?: list<StringFilter>|null,
     *     cloudOrgIds?: list<StringFilter>|null,
     *     cloudAccountIds?: list<StringFilter>|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|'NETWORK_FINDINGS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

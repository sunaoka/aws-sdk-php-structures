<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $resourceIds
 * @property list<StringFilter>|null $imageDigests
 * @property list<StringFilter>|null $repositories
 * @property list<StringFilter>|null $registries
 * @property list<StringFilter>|null $architectures
 * @property list<StringFilter>|null $imageTags
 * @property list<StringFilter>|null $cloudProviders
 * @property list<StringFilter>|null $cloudPartitions
 * @property list<StringFilter>|null $cloudRegions
 * @property list<StringFilter>|null $cloudOrgIds
 * @property list<StringFilter>|null $cloudAccountIds
 * @property list<DateFilter>|null $lastInUseAt
 * @property list<NumberFilter>|null $inUseCount
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 */
class ContainerImageAggregation extends Shape
{
    /**
     * @param array{
     *     resourceIds?: list<StringFilter>|null,
     *     imageDigests?: list<StringFilter>|null,
     *     repositories?: list<StringFilter>|null,
     *     registries?: list<StringFilter>|null,
     *     architectures?: list<StringFilter>|null,
     *     imageTags?: list<StringFilter>|null,
     *     cloudProviders?: list<StringFilter>|null,
     *     cloudPartitions?: list<StringFilter>|null,
     *     cloudRegions?: list<StringFilter>|null,
     *     cloudOrgIds?: list<StringFilter>|null,
     *     cloudAccountIds?: list<StringFilter>|null,
     *     lastInUseAt?: list<DateFilter>|null,
     *     inUseCount?: list<NumberFilter>|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $resourceIds
 * @property list<StringFilter>|null $functionNames
 * @property list<StringFilter>|null $runtimes
 * @property list<MapFilter>|null $functionTags
 * @property list<StringFilter>|null $cloudProviders
 * @property list<StringFilter>|null $cloudPartitions
 * @property list<StringFilter>|null $cloudRegions
 * @property list<StringFilter>|null $cloudOrgIds
 * @property list<StringFilter>|null $cloudAccountIds
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 */
class ServerlessFunctionAggregation extends Shape
{
    /**
     * @param array{
     *     resourceIds?: list<StringFilter>|null,
     *     functionNames?: list<StringFilter>|null,
     *     runtimes?: list<StringFilter>|null,
     *     functionTags?: list<MapFilter>|null,
     *     cloudProviders?: list<StringFilter>|null,
     *     cloudPartitions?: list<StringFilter>|null,
     *     cloudRegions?: list<StringFilter>|null,
     *     cloudOrgIds?: list<StringFilter>|null,
     *     cloudAccountIds?: list<StringFilter>|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $resourceIds
 * @property list<StringFilter>|null $imageShas
 * @property list<StringFilter>|null $repositories
 * @property list<StringFilter>|null $architectures
 * @property list<StringFilter>|null $imageTags
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 * @property list<DateFilter>|null $lastInUseAt
 * @property list<NumberFilter>|null $inUseCount
 */
class AwsEcrContainerAggregation extends Shape
{
    /**
     * @param array{
     *     resourceIds?: list<StringFilter>|null,
     *     imageShas?: list<StringFilter>|null,
     *     repositories?: list<StringFilter>|null,
     *     architectures?: list<StringFilter>|null,
     *     imageTags?: list<StringFilter>|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null,
     *     lastInUseAt?: list<DateFilter>|null,
     *     inUseCount?: list<NumberFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $architectures
 * @property list<StringFilter>|null $imageShas
 * @property list<StringFilter>|null $imageTags
 * @property list<NumberFilter>|null $inUseCount
 * @property list<DateFilter>|null $lastInUseAt
 * @property list<StringFilter>|null $repositories
 * @property list<StringFilter>|null $resourceIds
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 */
class AwsEcrContainerAggregation extends Shape
{
    /**
     * @param array{
     *     architectures?: list<StringFilter>|null,
     *     imageShas?: list<StringFilter>|null,
     *     imageTags?: list<StringFilter>|null,
     *     inUseCount?: list<NumberFilter>|null,
     *     lastInUseAt?: list<DateFilter>|null,
     *     repositories?: list<StringFilter>|null,
     *     resourceIds?: list<StringFilter>|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null,
     *     sortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $packageNames
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 */
class PackageAggregation extends Shape
{
    /**
     * @param array{
     *     packageNames?: list<StringFilter>|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null,
     *     sortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

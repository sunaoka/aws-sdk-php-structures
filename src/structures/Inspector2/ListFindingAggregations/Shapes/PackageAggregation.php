<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter> $packageNames
 * @property 'CRITICAL'|'HIGH'|'ALL' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class PackageAggregation extends Shape
{
    /**
     * @param array{
     *     packageNames?: list<StringFilter>,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL',
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

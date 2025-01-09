<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter> $repositories
 * @property 'CRITICAL'|'HIGH'|'ALL'|'AFFECTED_IMAGES' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class RepositoryAggregation extends Shape
{
    /**
     * @param array{
     *     repositories?: list<StringFilter>,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|'AFFECTED_IMAGES',
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

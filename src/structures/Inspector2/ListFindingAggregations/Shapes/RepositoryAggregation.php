<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $repositories
 * @property 'CRITICAL'|'HIGH'|'ALL'|'AFFECTED_IMAGES'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 */
class RepositoryAggregation extends Shape
{
    /**
     * @param array{
     *     repositories?: list<StringFilter>|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|'AFFECTED_IMAGES'|null,
     *     sortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

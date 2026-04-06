<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $amis
 * @property 'CRITICAL'|'HIGH'|'ALL'|'AFFECTED_INSTANCES'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 */
class AmiAggregation extends Shape
{
    /**
     * @param array{
     *     amis?: list<StringFilter>|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|'AFFECTED_INSTANCES'|null,
     *     sortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

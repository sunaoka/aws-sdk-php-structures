<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter> $amis
 * @property 'CRITICAL'|'HIGH'|'ALL'|'AFFECTED_INSTANCES' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class AmiAggregation extends Shape
{
    /**
     * @param array{
     *     amis?: list<StringFilter>,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|'AFFECTED_INSTANCES',
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

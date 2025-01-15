<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOURCE_TYPE'|'TOTAL_SIZE'|'CREATE_TIME' $Attribute
 * @property 'ASC'|'DESC'|null $SortOrder
 */
class SnapshotSortingEntity extends Shape
{
    /**
     * @param array{
     *     Attribute: 'SOURCE_TYPE'|'TOTAL_SIZE'|'CREATE_TIME',
     *     SortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

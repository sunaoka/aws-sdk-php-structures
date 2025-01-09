<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NAME'|'TRANSFORM_TYPE'|'STATUS'|'CREATED'|'LAST_MODIFIED' $Column
 * @property 'DESCENDING'|'ASCENDING' $SortDirection
 */
class TransformSortCriteria extends Shape
{
    /**
     * @param array{
     *     Column: 'NAME'|'TRANSFORM_TYPE'|'STATUS'|'CREATED'|'LAST_MODIFIED',
     *     SortDirection: 'DESCENDING'|'ASCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

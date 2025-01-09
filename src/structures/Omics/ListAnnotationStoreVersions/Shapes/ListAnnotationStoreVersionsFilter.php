<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationStoreVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 */
class ListAnnotationStoreVersionsFilter extends Shape
{
    /**
     * @param array{status?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

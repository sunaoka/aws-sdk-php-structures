<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 */
class ListAnnotationStoresFilter extends Shape
{
    /**
     * @param array{status?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Omics\ListVariantStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'|null $status
 */
class ListVariantStoresFilter extends Shape
{
    /**
     * @param array{status?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

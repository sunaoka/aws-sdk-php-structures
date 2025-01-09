<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListCollections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 */
class CollectionFilters extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     status?: 'CREATING'|'DELETING'|'ACTIVE'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

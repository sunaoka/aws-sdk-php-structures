<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetCollectionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacityDetails|null $search
 * @property CapacityDetails|null $indexing
 */
class CurrentCapacity extends Shape
{
    /**
     * @param array{
     *     search?: CapacityDetails|null,
     *     indexing?: CapacityDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

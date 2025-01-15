<?php

namespace Sunaoka\Aws\Structures\Omics\ListSequenceStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $createdAfter
 * @property \Aws\Api\DateTimeResult|null $createdBefore
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $updatedAfter
 * @property \Aws\Api\DateTimeResult|null $updatedBefore
 */
class SequenceStoreFilter extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     createdAfter?: \Aws\Api\DateTimeResult|null,
     *     createdBefore?: \Aws\Api\DateTimeResult|null,
     *     status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED'|null,
     *     updatedAfter?: \Aws\Api\DateTimeResult|null,
     *     updatedBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Omics\ListSequenceStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdAfter
 * @property \Aws\Api\DateTimeResult $createdBefore
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $updatedAfter
 * @property \Aws\Api\DateTimeResult $updatedBefore
 */
class SequenceStoreFilter extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     createdAfter?: \Aws\Api\DateTimeResult,
     *     createdBefore?: \Aws\Api\DateTimeResult,
     *     status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED',
     *     updatedAfter?: \Aws\Api\DateTimeResult,
     *     updatedBefore?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

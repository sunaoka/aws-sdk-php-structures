<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListIndices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property string $indexId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING' $status
 */
class Index extends Shape
{
    /**
     * @param array{
     *     displayName?: string,
     *     indexId?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

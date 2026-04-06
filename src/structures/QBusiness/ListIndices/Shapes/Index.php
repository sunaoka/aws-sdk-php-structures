<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListIndices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $displayName
 * @property string|null $indexId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null $status
 */
class Index extends Shape
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     indexId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

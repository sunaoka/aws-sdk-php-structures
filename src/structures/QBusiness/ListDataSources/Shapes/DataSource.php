<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $displayName
 * @property string|null $dataSourceId
 * @property string|null $type
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property 'PENDING_CREATION'|'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null $status
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     dataSourceId?: string|null,
     *     type?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'PENDING_CREATION'|'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

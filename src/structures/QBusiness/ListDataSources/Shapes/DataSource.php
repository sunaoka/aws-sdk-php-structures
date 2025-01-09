<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property string $dataSourceId
 * @property string $type
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'PENDING_CREATION'|'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING' $status
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     displayName?: string,
     *     dataSourceId?: string,
     *     type?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     status?: 'PENDING_CREATION'|'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

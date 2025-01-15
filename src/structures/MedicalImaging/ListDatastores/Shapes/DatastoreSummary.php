<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datastoreId
 * @property string $datastoreName
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED' $datastoreStatus
 * @property string|null $datastoreArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class DatastoreSummary extends Shape
{
    /**
     * @param array{
     *     datastoreId: string,
     *     datastoreName: string,
     *     datastoreStatus: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED',
     *     datastoreArn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datastoreId
 * @property string $datastoreName
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED' $datastoreStatus
 * @property string $datastoreArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DatastoreSummary extends Shape
{
    /**
     * @param array{
     *     datastoreId: string,
     *     datastoreName: string,
     *     datastoreStatus: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED',
     *     datastoreArn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

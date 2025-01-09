<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatastoreName
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED' $DatastoreStatus
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 */
class DatastoreFilter extends Shape
{
    /**
     * @param array{
     *     DatastoreName?: string,
     *     DatastoreStatus?: 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED',
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     CreatedAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

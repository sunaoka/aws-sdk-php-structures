<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatastoreName
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED'|null $DatastoreStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 */
class DatastoreFilter extends Shape
{
    /**
     * @param array{
     *     DatastoreName?: string|null,
     *     DatastoreStatus?: 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED'|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

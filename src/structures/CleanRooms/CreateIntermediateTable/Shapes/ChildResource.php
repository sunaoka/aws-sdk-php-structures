<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceId
 * @property 'INTERMEDIATE_TABLE' $resourceType
 * @property string $resourceName
 * @property string $ownerAccountId
 * @property 'CREATED'|'POPULATE_STARTED'|'POPULATE_SUCCESS'|'POPULATE_FAILED'|'DISALLOWED_BY_DATA_PROVIDER'|'BASE_TABLE_REMOVED'|'RETENTION_PERIOD_EXPIRED'|null $resourceStatus
 */
class ChildResource extends Shape
{
    /**
     * @param array{
     *     resourceId?: string|null,
     *     resourceType: 'INTERMEDIATE_TABLE',
     *     resourceName: string,
     *     ownerAccountId: string,
     *     resourceStatus?: 'CREATED'|'POPULATE_STARTED'|'POPULATE_SUCCESS'|'POPULATE_FAILED'|'DISALLOWED_BY_DATA_PROVIDER'|'BASE_TABLE_REMOVED'|'RETENTION_PERIOD_EXPIRED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

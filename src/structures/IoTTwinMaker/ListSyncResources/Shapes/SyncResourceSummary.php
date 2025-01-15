<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENTITY'|'COMPONENT_TYPE'|null $resourceType
 * @property string|null $externalId
 * @property string|null $resourceId
 * @property SyncResourceStatus|null $status
 * @property \Aws\Api\DateTimeResult|null $updateDateTime
 */
class SyncResourceSummary extends Shape
{
    /**
     * @param array{
     *     resourceType?: 'ENTITY'|'COMPONENT_TYPE'|null,
     *     externalId?: string|null,
     *     resourceId?: string|null,
     *     status?: SyncResourceStatus|null,
     *     updateDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

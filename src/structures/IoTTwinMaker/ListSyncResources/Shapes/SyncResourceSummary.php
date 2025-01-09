<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENTITY'|'COMPONENT_TYPE' $resourceType
 * @property string $externalId
 * @property string $resourceId
 * @property SyncResourceStatus $status
 * @property \Aws\Api\DateTimeResult $updateDateTime
 */
class SyncResourceSummary extends Shape
{
    /**
     * @param array{
     *     resourceType?: 'ENTITY'|'COMPONENT_TYPE',
     *     externalId?: string,
     *     resourceId?: string,
     *     status?: SyncResourceStatus,
     *     updateDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIALIZING'|'PROCESSING'|'DELETED'|'IN_SYNC'|'ERROR'|null $state
 * @property 'ENTITY'|'COMPONENT_TYPE'|null $resourceType
 * @property string|null $resourceId
 * @property string|null $externalId
 */
class SyncResourceFilter extends Shape
{
    /**
     * @param array{
     *     state?: 'INITIALIZING'|'PROCESSING'|'DELETED'|'IN_SYNC'|'ERROR'|null,
     *     resourceType?: 'ENTITY'|'COMPONENT_TYPE'|null,
     *     resourceId?: string|null,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

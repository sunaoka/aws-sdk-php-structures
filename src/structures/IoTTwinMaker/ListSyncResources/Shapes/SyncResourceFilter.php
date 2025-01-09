<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIALIZING'|'PROCESSING'|'DELETED'|'IN_SYNC'|'ERROR' $state
 * @property 'ENTITY'|'COMPONENT_TYPE' $resourceType
 * @property string $resourceId
 * @property string $externalId
 */
class SyncResourceFilter extends Shape
{
    /**
     * @param array{
     *     state?: 'INITIALIZING'|'PROCESSING'|'DELETED'|'IN_SYNC'|'ERROR',
     *     resourceType?: 'ENTITY'|'COMPONENT_TYPE',
     *     resourceId?: string,
     *     externalId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

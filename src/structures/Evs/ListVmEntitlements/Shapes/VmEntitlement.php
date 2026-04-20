<?php

namespace Sunaoka\Aws\Structures\Evs\ListVmEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vmId
 * @property string|null $environmentId
 * @property string|null $connectorId
 * @property string|null $vmName
 * @property 'WINDOWS_SERVER'|null $type
 * @property 'CREATING'|'CREATED'|'DELETED'|'AT_RISK'|'ENTITLEMENT_REMOVED'|'CREATE_FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastSyncedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $stoppedAt
 * @property ErrorDetail|null $errorDetail
 */
class VmEntitlement extends Shape
{
    /**
     * @param array{
     *     vmId?: string|null,
     *     environmentId?: string|null,
     *     connectorId?: string|null,
     *     vmName?: string|null,
     *     type?: 'WINDOWS_SERVER'|null,
     *     status?: 'CREATING'|'CREATED'|'DELETED'|'AT_RISK'|'ENTITLEMENT_REMOVED'|'CREATE_FAILED'|null,
     *     lastSyncedAt?: \Aws\Api\DateTimeResult|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     stoppedAt?: \Aws\Api\DateTimeResult|null,
     *     errorDetail?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

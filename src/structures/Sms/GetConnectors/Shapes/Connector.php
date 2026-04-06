<?php

namespace Sunaoka\Aws\Structures\Sms\GetConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $connectorId
 * @property string|null $version
 * @property 'HEALTHY'|'UNHEALTHY'|null $status
 * @property list<'VSPHERE'|'SCVMM'|'HYPERV-MANAGER'|'SNAPSHOT_BATCHING'|'SMS_OPTIMIZED'>|null $capabilityList
 * @property string|null $vmManagerName
 * @property 'VSPHERE'|'SCVMM'|'HYPERV-MANAGER'|null $vmManagerType
 * @property string|null $vmManagerId
 * @property string|null $ipAddress
 * @property string|null $macAddress
 * @property \Aws\Api\DateTimeResult|null $associatedOn
 */
class Connector extends Shape
{
    /**
     * @param array{
     *     connectorId?: string|null,
     *     version?: string|null,
     *     status?: 'HEALTHY'|'UNHEALTHY'|null,
     *     capabilityList?: list<'VSPHERE'|'SCVMM'|'HYPERV-MANAGER'|'SNAPSHOT_BATCHING'|'SMS_OPTIMIZED'>|null,
     *     vmManagerName?: string|null,
     *     vmManagerType?: 'VSPHERE'|'SCVMM'|'HYPERV-MANAGER'|null,
     *     vmManagerId?: string|null,
     *     ipAddress?: string|null,
     *     macAddress?: string|null,
     *     associatedOn?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

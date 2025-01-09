<?php

namespace Sunaoka\Aws\Structures\Sms\GetConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectorId
 * @property string $version
 * @property 'HEALTHY'|'UNHEALTHY' $status
 * @property list<'VSPHERE'|'SCVMM'|'HYPERV-MANAGER'|'SNAPSHOT_BATCHING'|'SMS_OPTIMIZED'> $capabilityList
 * @property string $vmManagerName
 * @property 'VSPHERE'|'SCVMM'|'HYPERV-MANAGER' $vmManagerType
 * @property string $vmManagerId
 * @property string $ipAddress
 * @property string $macAddress
 * @property \Aws\Api\DateTimeResult $associatedOn
 */
class Connector extends Shape
{
    /**
     * @param array{
     *     connectorId?: string,
     *     version?: string,
     *     status?: 'HEALTHY'|'UNHEALTHY',
     *     capabilityList?: list<'VSPHERE'|'SCVMM'|'HYPERV-MANAGER'|'SNAPSHOT_BATCHING'|'SMS_OPTIMIZED'>,
     *     vmManagerName?: string,
     *     vmManagerType?: 'VSPHERE'|'SCVMM'|'HYPERV-MANAGER',
     *     vmManagerId?: string,
     *     ipAddress?: string,
     *     macAddress?: string,
     *     associatedOn?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

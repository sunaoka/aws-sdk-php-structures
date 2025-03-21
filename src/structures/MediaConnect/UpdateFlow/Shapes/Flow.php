<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property string|null $Description
 * @property string|null $EgressIp
 * @property list<Entitlement> $Entitlements
 * @property string $FlowArn
 * @property list<MediaStream>|null $MediaStreams
 * @property string $Name
 * @property list<Output> $Outputs
 * @property Source $Source
 * @property FailoverConfig|null $SourceFailoverConfig
 * @property list<Source>|null $Sources
 * @property 'STANDBY'|'ACTIVE'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'ERROR' $Status
 * @property list<VpcInterface>|null $VpcInterfaces
 * @property Maintenance|null $Maintenance
 * @property MonitoringConfig|null $SourceMonitoringConfig
 * @property 'MEDIUM'|'LARGE'|null $FlowSize
 * @property NdiConfig|null $NdiConfig
 */
class Flow extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone: string,
     *     Description?: string|null,
     *     EgressIp?: string|null,
     *     Entitlements: list<Entitlement>,
     *     FlowArn: string,
     *     MediaStreams?: list<MediaStream>|null,
     *     Name: string,
     *     Outputs: list<Output>,
     *     Source: Source,
     *     SourceFailoverConfig?: FailoverConfig|null,
     *     Sources?: list<Source>|null,
     *     Status: 'STANDBY'|'ACTIVE'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'ERROR',
     *     VpcInterfaces?: list<VpcInterface>|null,
     *     Maintenance?: Maintenance|null,
     *     SourceMonitoringConfig?: MonitoringConfig|null,
     *     FlowSize?: 'MEDIUM'|'LARGE'|null,
     *     NdiConfig?: NdiConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

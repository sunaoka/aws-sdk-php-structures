<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property string $Description
 * @property string $EgressIp
 * @property list<Entitlement> $Entitlements
 * @property string $FlowArn
 * @property list<MediaStream> $MediaStreams
 * @property string $Name
 * @property list<Output> $Outputs
 * @property Source $Source
 * @property FailoverConfig $SourceFailoverConfig
 * @property list<Source> $Sources
 * @property 'STANDBY'|'ACTIVE'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'ERROR' $Status
 * @property list<VpcInterface> $VpcInterfaces
 * @property Maintenance $Maintenance
 * @property MonitoringConfig $SourceMonitoringConfig
 */
class Flow extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone: string,
     *     Description?: string,
     *     EgressIp?: string,
     *     Entitlements: list<Entitlement>,
     *     FlowArn: string,
     *     MediaStreams?: list<MediaStream>,
     *     Name: string,
     *     Outputs: list<Output>,
     *     Source: Source,
     *     SourceFailoverConfig?: FailoverConfig,
     *     Sources?: list<Source>,
     *     Status: 'STANDBY'|'ACTIVE'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'ERROR',
     *     VpcInterfaces?: list<VpcInterface>,
     *     Maintenance?: Maintenance,
     *     SourceMonitoringConfig?: MonitoringConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

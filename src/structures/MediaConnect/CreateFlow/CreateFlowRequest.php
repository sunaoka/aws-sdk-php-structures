<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AvailabilityZone
 * @property list<Shapes\GrantEntitlementRequest> $Entitlements
 * @property list<Shapes\AddMediaStreamRequest> $MediaStreams
 * @property string $Name
 * @property list<Shapes\AddOutputRequest> $Outputs
 * @property Shapes\SetSourceRequest $Source
 * @property Shapes\FailoverConfig $SourceFailoverConfig
 * @property list<Shapes\SetSourceRequest> $Sources
 * @property list<Shapes\VpcInterfaceRequest> $VpcInterfaces
 * @property Shapes\AddMaintenance $Maintenance
 * @property Shapes\MonitoringConfig $SourceMonitoringConfig
 */
class CreateFlowRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     Entitlements?: list<Shapes\GrantEntitlementRequest>,
     *     MediaStreams?: list<Shapes\AddMediaStreamRequest>,
     *     Name: string,
     *     Outputs?: list<Shapes\AddOutputRequest>,
     *     Source?: Shapes\SetSourceRequest,
     *     SourceFailoverConfig?: Shapes\FailoverConfig,
     *     Sources?: list<Shapes\SetSourceRequest>,
     *     VpcInterfaces?: list<Shapes\VpcInterfaceRequest>,
     *     Maintenance?: Shapes\AddMaintenance,
     *     SourceMonitoringConfig?: Shapes\MonitoringConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AvailabilityZone
 * @property list<Shapes\GrantEntitlementRequest>|null $Entitlements
 * @property list<Shapes\AddMediaStreamRequest>|null $MediaStreams
 * @property string $Name
 * @property list<Shapes\AddOutputRequest>|null $Outputs
 * @property Shapes\SetSourceRequest|null $Source
 * @property Shapes\FailoverConfig|null $SourceFailoverConfig
 * @property list<Shapes\SetSourceRequest>|null $Sources
 * @property list<Shapes\VpcInterfaceRequest>|null $VpcInterfaces
 * @property Shapes\AddMaintenance|null $Maintenance
 * @property Shapes\MonitoringConfig|null $SourceMonitoringConfig
 * @property 'MEDIUM'|'LARGE'|'LARGE_4X'|null $FlowSize
 * @property Shapes\NdiConfig|null $NdiConfig
 * @property Shapes\EncodingConfig|null $EncodingConfig
 * @property array<string, string>|null $FlowTags
 */
class CreateFlowRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     Entitlements?: list<Shapes\GrantEntitlementRequest>|null,
     *     MediaStreams?: list<Shapes\AddMediaStreamRequest>|null,
     *     Name: string,
     *     Outputs?: list<Shapes\AddOutputRequest>|null,
     *     Source?: Shapes\SetSourceRequest|null,
     *     SourceFailoverConfig?: Shapes\FailoverConfig|null,
     *     Sources?: list<Shapes\SetSourceRequest>|null,
     *     VpcInterfaces?: list<Shapes\VpcInterfaceRequest>|null,
     *     Maintenance?: Shapes\AddMaintenance|null,
     *     SourceMonitoringConfig?: Shapes\MonitoringConfig|null,
     *     FlowSize?: 'MEDIUM'|'LARGE'|'LARGE_4X'|null,
     *     NdiConfig?: Shapes\NdiConfig|null,
     *     EncodingConfig?: Shapes\EncodingConfig|null,
     *     FlowTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

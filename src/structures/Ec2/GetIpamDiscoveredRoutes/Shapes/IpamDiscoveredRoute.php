<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpamResourceDiscoveryId
 * @property string|null $ResourceRegion
 * @property string|null $ResourceOwnerId
 * @property string|null $Cidr
 * @property string|null $Asn
 * @property 'advertised'|'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-advertising'|'pending-deprovision'|'pending-provision'|'pending-withdrawal'|'provisioned'|'provisioned-not-publicly-advertisable'|null $State
 * @property 'regional'|'global'|null $AdvertisementType
 * @property string|null $NetworkBorderGroup
 * @property string|null $PoolId
 * @property string|null $IpamPoolId
 * @property \Aws\Api\DateTimeResult|null $SampleTime
 */
class IpamDiscoveredRoute extends Shape
{
    /**
     * @param array{
     *     IpamResourceDiscoveryId?: string|null,
     *     ResourceRegion?: string|null,
     *     ResourceOwnerId?: string|null,
     *     Cidr?: string|null,
     *     Asn?: string|null,
     *     State?: 'advertised'|'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-advertising'|'pending-deprovision'|'pending-provision'|'pending-withdrawal'|'provisioned'|'provisioned-not-publicly-advertisable'|null,
     *     AdvertisementType?: 'regional'|'global'|null,
     *     NetworkBorderGroup?: string|null,
     *     PoolId?: string|null,
     *     IpamPoolId?: string|null,
     *     SampleTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

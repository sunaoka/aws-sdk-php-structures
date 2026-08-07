<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamRouteProtectionFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceOwnerId
 * @property string|null $ResourceRegion
 * @property string|null $IpamPoolId
 * @property string|null $Cidr
 * @property 'advertised'|'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-advertising'|'pending-deprovision'|'pending-provision'|'pending-withdrawal'|'provisioned'|'provisioned-not-publicly-advertisable'|null $State
 * @property 'regional'|'global'|null $AdvertisementType
 * @property string|null $NetworkBorderGroup
 * @property string|null $PoolId
 * @property string|null $Asn
 * @property 'valid'|'invalid'|'unknown'|null $RpkiStatus
 * @property 'strict'|'permissive'|null $RpkiStrength
 * @property list<IpamRouteOriginAuthorization>|null $Roas
 * @property list<IpamRouteOverlap>|null $RouteOverlaps
 * @property \Aws\Api\DateTimeResult|null $SampleTime
 * @property \Aws\Api\DateTimeResult|null $RoaSampleTime
 */
class IpamRouteProtectionFinding extends Shape
{
    /**
     * @param array{
     *     ResourceOwnerId?: string|null,
     *     ResourceRegion?: string|null,
     *     IpamPoolId?: string|null,
     *     Cidr?: string|null,
     *     State?: 'advertised'|'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-advertising'|'pending-deprovision'|'pending-provision'|'pending-withdrawal'|'provisioned'|'provisioned-not-publicly-advertisable'|null,
     *     AdvertisementType?: 'regional'|'global'|null,
     *     NetworkBorderGroup?: string|null,
     *     PoolId?: string|null,
     *     Asn?: string|null,
     *     RpkiStatus?: 'valid'|'invalid'|'unknown'|null,
     *     RpkiStrength?: 'strict'|'permissive'|null,
     *     Roas?: list<IpamRouteOriginAuthorization>|null,
     *     RouteOverlaps?: list<IpamRouteOverlap>|null,
     *     SampleTime?: \Aws\Api\DateTimeResult|null,
     *     RoaSampleTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

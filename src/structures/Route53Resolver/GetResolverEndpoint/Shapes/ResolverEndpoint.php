<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $CreatorRequestId
 * @property string|null $Arn
 * @property string|null $Name
 * @property list<string>|null $SecurityGroupIds
 * @property 'INBOUND'|'OUTBOUND'|'INBOUND_DELEGATION'|null $Direction
 * @property int|null $IpAddressCount
 * @property string|null $HostVPCId
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'AUTO_RECOVERING'|'ACTION_NEEDED'|'DELETING'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $CreationTime
 * @property string|null $ModificationTime
 * @property string|null $OutpostArn
 * @property string|null $PreferredInstanceType
 * @property 'IPV6'|'IPV4'|'DUALSTACK'|null $ResolverEndpointType
 * @property list<'DoH'|'Do53'|'DoH-FIPS'>|null $Protocols
 * @property bool|null $RniEnhancedMetricsEnabled
 * @property bool|null $TargetNameServerMetricsEnabled
 */
class ResolverEndpoint extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     CreatorRequestId?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     Direction?: 'INBOUND'|'OUTBOUND'|'INBOUND_DELEGATION'|null,
     *     IpAddressCount?: int|null,
     *     HostVPCId?: string|null,
     *     Status?: 'CREATING'|'OPERATIONAL'|'UPDATING'|'AUTO_RECOVERING'|'ACTION_NEEDED'|'DELETING'|null,
     *     StatusMessage?: string|null,
     *     CreationTime?: string|null,
     *     ModificationTime?: string|null,
     *     OutpostArn?: string|null,
     *     PreferredInstanceType?: string|null,
     *     ResolverEndpointType?: 'IPV6'|'IPV4'|'DUALSTACK'|null,
     *     Protocols?: list<'DoH'|'Do53'|'DoH-FIPS'>|null,
     *     RniEnhancedMetricsEnabled?: bool|null,
     *     TargetNameServerMetricsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateResolverEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $CreatorRequestId
 * @property string $Arn
 * @property string $Name
 * @property list<string> $SecurityGroupIds
 * @property 'INBOUND'|'OUTBOUND' $Direction
 * @property int $IpAddressCount
 * @property string $HostVPCId
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'AUTO_RECOVERING'|'ACTION_NEEDED'|'DELETING' $Status
 * @property string $StatusMessage
 * @property string $CreationTime
 * @property string $ModificationTime
 * @property string $OutpostArn
 * @property string $PreferredInstanceType
 * @property 'IPV6'|'IPV4'|'DUALSTACK' $ResolverEndpointType
 * @property list<'DoH'|'Do53'|'DoH-FIPS'> $Protocols
 */
class ResolverEndpoint extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     CreatorRequestId?: string,
     *     Arn?: string,
     *     Name?: string,
     *     SecurityGroupIds?: list<string>,
     *     Direction?: 'INBOUND'|'OUTBOUND',
     *     IpAddressCount?: int,
     *     HostVPCId?: string,
     *     Status?: 'CREATING'|'OPERATIONAL'|'UPDATING'|'AUTO_RECOVERING'|'ACTION_NEEDED'|'DELETING',
     *     StatusMessage?: string,
     *     CreationTime?: string,
     *     ModificationTime?: string,
     *     OutpostArn?: string,
     *     PreferredInstanceType?: string,
     *     ResolverEndpointType?: 'IPV6'|'IPV4'|'DUALSTACK',
     *     Protocols?: list<'DoH'|'Do53'|'DoH-FIPS'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

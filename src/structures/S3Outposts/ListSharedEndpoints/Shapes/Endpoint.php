<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListSharedEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointArn
 * @property string|null $OutpostsId
 * @property string|null $CidrBlock
 * @property 'Pending'|'Available'|'Deleting'|'Create_Failed'|'Delete_Failed'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<NetworkInterface>|null $NetworkInterfaces
 * @property string|null $VpcId
 * @property string|null $SubnetId
 * @property string|null $SecurityGroupId
 * @property 'Private'|'CustomerOwnedIp'|null $AccessType
 * @property string|null $CustomerOwnedIpv4Pool
 * @property FailedReason|null $FailedReason
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     EndpointArn?: string|null,
     *     OutpostsId?: string|null,
     *     CidrBlock?: string|null,
     *     Status?: 'Pending'|'Available'|'Deleting'|'Create_Failed'|'Delete_Failed'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     NetworkInterfaces?: list<NetworkInterface>|null,
     *     VpcId?: string|null,
     *     SubnetId?: string|null,
     *     SecurityGroupId?: string|null,
     *     AccessType?: 'Private'|'CustomerOwnedIp'|null,
     *     CustomerOwnedIpv4Pool?: string|null,
     *     FailedReason?: FailedReason|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

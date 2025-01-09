<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointArn
 * @property string $OutpostsId
 * @property string $CidrBlock
 * @property 'Pending'|'Available'|'Deleting'|'Create_Failed'|'Delete_Failed' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<NetworkInterface> $NetworkInterfaces
 * @property string $VpcId
 * @property string $SubnetId
 * @property string $SecurityGroupId
 * @property 'Private'|'CustomerOwnedIp' $AccessType
 * @property string $CustomerOwnedIpv4Pool
 * @property FailedReason $FailedReason
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     EndpointArn?: string,
     *     OutpostsId?: string,
     *     CidrBlock?: string,
     *     Status?: 'Pending'|'Available'|'Deleting'|'Create_Failed'|'Delete_Failed',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     NetworkInterfaces?: list<NetworkInterface>,
     *     VpcId?: string,
     *     SubnetId?: string,
     *     SecurityGroupId?: string,
     *     AccessType?: 'Private'|'CustomerOwnedIp',
     *     CustomerOwnedIpv4Pool?: string,
     *     FailedReason?: FailedReason
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

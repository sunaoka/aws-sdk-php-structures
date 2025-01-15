<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeVPCConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VPCConnectionId
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $VPCId
 * @property list<string>|null $SecurityGroupIds
 * @property list<string>|null $DnsResolvers
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETION_IN_PROGRESS'|'DELETION_FAILED'|'DELETED'|null $Status
 * @property 'AVAILABLE'|'UNAVAILABLE'|'PARTIALLY_AVAILABLE'|null $AvailabilityStatus
 * @property list<NetworkInterface>|null $NetworkInterfaces
 * @property string|null $RoleArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class VPCConnection extends Shape
{
    /**
     * @param array{
     *     VPCConnectionId?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     VPCId?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     DnsResolvers?: list<string>|null,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETION_IN_PROGRESS'|'DELETION_FAILED'|'DELETED'|null,
     *     AvailabilityStatus?: 'AVAILABLE'|'UNAVAILABLE'|'PARTIALLY_AVAILABLE'|null,
     *     NetworkInterfaces?: list<NetworkInterface>|null,
     *     RoleArn?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

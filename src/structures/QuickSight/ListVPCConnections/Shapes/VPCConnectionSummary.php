<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListVPCConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VPCConnectionId
 * @property string $Arn
 * @property string $Name
 * @property string $VPCId
 * @property list<string> $SecurityGroupIds
 * @property list<string> $DnsResolvers
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETION_IN_PROGRESS'|'DELETION_FAILED'|'DELETED' $Status
 * @property 'AVAILABLE'|'UNAVAILABLE'|'PARTIALLY_AVAILABLE' $AvailabilityStatus
 * @property list<NetworkInterface> $NetworkInterfaces
 * @property string $RoleArn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class VPCConnectionSummary extends Shape
{
    /**
     * @param array{
     *     VPCConnectionId?: string,
     *     Arn?: string,
     *     Name?: string,
     *     VPCId?: string,
     *     SecurityGroupIds?: list<string>,
     *     DnsResolvers?: list<string>,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETION_IN_PROGRESS'|'DELETION_FAILED'|'DELETED',
     *     AvailabilityStatus?: 'AVAILABLE'|'UNAVAILABLE'|'PARTIALLY_AVAILABLE',
     *     NetworkInterfaces?: list<NetworkInterface>,
     *     RoleArn?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

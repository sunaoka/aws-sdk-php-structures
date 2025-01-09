<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDomainControllers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $DomainControllerId
 * @property string $DnsIpAddr
 * @property string $VpcId
 * @property string $SubnetId
 * @property string $AvailabilityZone
 * @property 'Creating'|'Active'|'Impaired'|'Restoring'|'Deleting'|'Deleted'|'Failed'|'Updating' $Status
 * @property string $StatusReason
 * @property \Aws\Api\DateTimeResult $LaunchTime
 * @property \Aws\Api\DateTimeResult $StatusLastUpdatedDateTime
 */
class DomainController extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     DomainControllerId?: string,
     *     DnsIpAddr?: string,
     *     VpcId?: string,
     *     SubnetId?: string,
     *     AvailabilityZone?: string,
     *     Status?: 'Creating'|'Active'|'Impaired'|'Restoring'|'Deleting'|'Deleted'|'Failed'|'Updating',
     *     StatusReason?: string,
     *     LaunchTime?: \Aws\Api\DateTimeResult,
     *     StatusLastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

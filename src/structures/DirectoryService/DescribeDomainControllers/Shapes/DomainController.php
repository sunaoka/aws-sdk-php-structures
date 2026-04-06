<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDomainControllers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property string|null $DomainControllerId
 * @property string|null $DnsIpAddr
 * @property string|null $VpcId
 * @property string|null $SubnetId
 * @property string|null $AvailabilityZone
 * @property 'Creating'|'Active'|'Impaired'|'Restoring'|'Deleting'|'Deleted'|'Failed'|'Updating'|null $Status
 * @property string|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $LaunchTime
 * @property \Aws\Api\DateTimeResult|null $StatusLastUpdatedDateTime
 */
class DomainController extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     DomainControllerId?: string|null,
     *     DnsIpAddr?: string|null,
     *     VpcId?: string|null,
     *     SubnetId?: string|null,
     *     AvailabilityZone?: string|null,
     *     Status?: 'Creating'|'Active'|'Impaired'|'Restoring'|'Deleting'|'Deleted'|'Failed'|'Updating'|null,
     *     StatusReason?: string|null,
     *     LaunchTime?: \Aws\Api\DateTimeResult|null,
     *     StatusLastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZoneName
 * @property 'Active'|'StandBy'|'NotAvailable' $ZoneStatus
 * @property string $ConfiguredDataNodeCount
 * @property string $AvailableDataNodeCount
 * @property string $TotalShards
 * @property string $TotalUnAssignedShards
 */
class AvailabilityZoneInfo extends Shape
{
    /**
     * @param array{
     *     AvailabilityZoneName?: string,
     *     ZoneStatus?: 'Active'|'StandBy'|'NotAvailable',
     *     ConfiguredDataNodeCount?: string,
     *     AvailableDataNodeCount?: string,
     *     TotalShards?: string,
     *     TotalUnAssignedShards?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

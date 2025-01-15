<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZoneName
 * @property 'Active'|'StandBy'|'NotAvailable'|null $ZoneStatus
 * @property string|null $ConfiguredDataNodeCount
 * @property string|null $AvailableDataNodeCount
 * @property string|null $TotalShards
 * @property string|null $TotalUnAssignedShards
 */
class AvailabilityZoneInfo extends Shape
{
    /**
     * @param array{
     *     AvailabilityZoneName?: string|null,
     *     ZoneStatus?: 'Active'|'StandBy'|'NotAvailable'|null,
     *     ConfiguredDataNodeCount?: string|null,
     *     AvailableDataNodeCount?: string|null,
     *     TotalShards?: string|null,
     *     TotalUnAssignedShards?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

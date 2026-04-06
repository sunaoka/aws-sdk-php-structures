<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property string|null $RegionName
 * @property 'Primary'|'Additional'|null $RegionType
 * @property 'Requested'|'Creating'|'Created'|'Active'|'Inoperable'|'Impaired'|'Restoring'|'RestoreFailed'|'Deleting'|'Deleted'|'Failed'|'Updating'|null $Status
 * @property DirectoryVpcSettings|null $VpcSettings
 * @property int<2, max>|null $DesiredNumberOfDomainControllers
 * @property \Aws\Api\DateTimeResult|null $LaunchTime
 * @property \Aws\Api\DateTimeResult|null $StatusLastUpdatedDateTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDateTime
 */
class RegionDescription extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     RegionName?: string|null,
     *     RegionType?: 'Primary'|'Additional'|null,
     *     Status?: 'Requested'|'Creating'|'Created'|'Active'|'Inoperable'|'Impaired'|'Restoring'|'RestoreFailed'|'Deleting'|'Deleted'|'Failed'|'Updating'|null,
     *     VpcSettings?: DirectoryVpcSettings|null,
     *     DesiredNumberOfDomainControllers?: int<2, max>|null,
     *     LaunchTime?: \Aws\Api\DateTimeResult|null,
     *     StatusLastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

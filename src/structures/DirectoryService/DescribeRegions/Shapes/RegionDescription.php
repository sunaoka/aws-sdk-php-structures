<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $RegionName
 * @property 'Primary'|'Additional' $RegionType
 * @property 'Requested'|'Creating'|'Created'|'Active'|'Inoperable'|'Impaired'|'Restoring'|'RestoreFailed'|'Deleting'|'Deleted'|'Failed'|'Updating' $Status
 * @property DirectoryVpcSettings $VpcSettings
 * @property int<2, max> $DesiredNumberOfDomainControllers
 * @property \Aws\Api\DateTimeResult $LaunchTime
 * @property \Aws\Api\DateTimeResult $StatusLastUpdatedDateTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedDateTime
 */
class RegionDescription extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     RegionName?: string,
     *     RegionType?: 'Primary'|'Additional',
     *     Status?: 'Requested'|'Creating'|'Created'|'Active'|'Inoperable'|'Impaired'|'Restoring'|'RestoreFailed'|'Deleting'|'Deleted'|'Failed'|'Updating',
     *     VpcSettings?: DirectoryVpcSettings,
     *     DesiredNumberOfDomainControllers?: int<2, max>,
     *     LaunchTime?: \Aws\Api\DateTimeResult,
     *     StatusLastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

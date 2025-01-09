<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListHarvestJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property Destination $Destination
 * @property string $HarvestJobName
 * @property HarvestedManifests $HarvestedManifests
 * @property string $Description
 * @property HarvesterScheduleConfiguration $ScheduleConfiguration
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property 'QUEUED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED' $Status
 * @property string $ErrorMessage
 * @property string $ETag
 */
class HarvestJob extends Shape
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     OriginEndpointName: string,
     *     Destination: Destination,
     *     HarvestJobName: string,
     *     HarvestedManifests: HarvestedManifests,
     *     Description?: string,
     *     ScheduleConfiguration: HarvesterScheduleConfiguration,
     *     Arn: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     ModifiedAt: \Aws\Api\DateTimeResult,
     *     Status: 'QUEUED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED',
     *     ErrorMessage?: string,
     *     ETag?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateHarvestJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property Shapes\Destination $Destination
 * @property string $HarvestJobName
 * @property Shapes\HarvestedManifests $HarvestedManifests
 * @property string $Description
 * @property Shapes\HarvesterScheduleConfiguration $ScheduleConfiguration
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property 'QUEUED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED' $Status
 * @property string $ErrorMessage
 * @property string $ETag
 * @property array<string, string> $Tags
 */
class CreateHarvestJobResponse extends Response
{
}

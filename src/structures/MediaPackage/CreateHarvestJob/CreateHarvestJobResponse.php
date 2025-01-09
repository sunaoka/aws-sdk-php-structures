<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateHarvestJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $ChannelId
 * @property string $CreatedAt
 * @property string $EndTime
 * @property string $Id
 * @property string $OriginEndpointId
 * @property Shapes\S3Destination $S3Destination
 * @property string $StartTime
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $Status
 */
class CreateHarvestJobResponse extends Response
{
}

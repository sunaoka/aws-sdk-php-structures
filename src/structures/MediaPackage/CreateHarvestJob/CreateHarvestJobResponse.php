<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateHarvestJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $ChannelId
 * @property string|null $CreatedAt
 * @property string|null $EndTime
 * @property string|null $Id
 * @property string|null $OriginEndpointId
 * @property Shapes\S3Destination|null $S3Destination
 * @property string|null $StartTime
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $Status
 */
class CreateHarvestJobResponse extends Response
{
}

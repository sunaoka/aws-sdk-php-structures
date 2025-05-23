<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartPiiEntitiesDetectionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property string|null $JobArn
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null $JobStatus
 */
class StartPiiEntitiesDetectionJobResponse extends Response
{
}

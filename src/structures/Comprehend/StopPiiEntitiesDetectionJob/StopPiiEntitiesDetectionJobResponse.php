<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopPiiEntitiesDetectionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null $JobStatus
 */
class StopPiiEntitiesDetectionJobResponse extends Response
{
}

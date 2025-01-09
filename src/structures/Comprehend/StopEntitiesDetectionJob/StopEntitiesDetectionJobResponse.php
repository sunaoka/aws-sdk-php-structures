<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopEntitiesDetectionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED' $JobStatus
 */
class StopEntitiesDetectionJobResponse extends Response
{
}

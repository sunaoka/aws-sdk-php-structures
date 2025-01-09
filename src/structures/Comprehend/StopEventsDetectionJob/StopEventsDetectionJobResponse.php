<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopEventsDetectionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED' $JobStatus
 */
class StopEventsDetectionJobResponse extends Response
{
}

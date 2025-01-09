<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartEntitiesDetectionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property string $JobArn
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED' $JobStatus
 * @property string $EntityRecognizerArn
 */
class StartEntitiesDetectionJobResponse extends Response
{
}

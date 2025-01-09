<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopTargetedSentimentDetectionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED' $JobStatus
 */
class StopTargetedSentimentDetectionJobResponse extends Response
{
}

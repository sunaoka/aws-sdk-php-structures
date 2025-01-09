<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartDominantLanguageDetectionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property string $JobArn
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED' $JobStatus
 */
class StartDominantLanguageDetectionJobResponse extends Response
{
}

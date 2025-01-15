<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartDominantLanguageDetectionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property string|null $JobArn
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null $JobStatus
 */
class StartDominantLanguageDetectionJobResponse extends Response
{
}

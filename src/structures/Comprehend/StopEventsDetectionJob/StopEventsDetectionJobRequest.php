<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopEventsDetectionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class StopEventsDetectionJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

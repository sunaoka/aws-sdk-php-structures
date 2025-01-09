<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopSentimentDetectionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class StopSentimentDetectionJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

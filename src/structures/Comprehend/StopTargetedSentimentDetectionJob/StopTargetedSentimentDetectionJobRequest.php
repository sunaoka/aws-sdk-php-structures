<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopTargetedSentimentDetectionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class StopTargetedSentimentDetectionJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

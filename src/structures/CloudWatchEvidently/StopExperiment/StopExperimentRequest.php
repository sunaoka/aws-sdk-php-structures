<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StopExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'COMPLETED'|'CANCELLED' $desiredState
 * @property string $experiment
 * @property string $project
 * @property string $reason
 */
class StopExperimentRequest extends Request
{
    /**
     * @param array{
     *     desiredState?: 'COMPLETED'|'CANCELLED',
     *     experiment: string,
     *     project: string,
     *     reason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

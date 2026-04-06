<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StopExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'COMPLETED'|'CANCELLED'|null $desiredState
 * @property string $experiment
 * @property string $project
 * @property string|null $reason
 */
class StopExperimentRequest extends Request
{
    /**
     * @param array{
     *     desiredState?: 'COMPLETED'|'CANCELLED'|null,
     *     experiment: string,
     *     project: string,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

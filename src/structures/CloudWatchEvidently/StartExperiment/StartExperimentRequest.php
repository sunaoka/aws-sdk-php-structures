<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StartExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $analysisCompleteTime
 * @property string $experiment
 * @property string $project
 */
class StartExperimentRequest extends Request
{
    /**
     * @param array{
     *     analysisCompleteTime: \Aws\Api\DateTimeResult,
     *     experiment: string,
     *     project: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

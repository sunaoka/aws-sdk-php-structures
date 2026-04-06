<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $experiment
 * @property string $project
 */
class GetExperimentRequest extends Request
{
    /**
     * @param array{
     *     experiment: string,
     *     project: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\DeleteExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $experiment
 * @property string $project
 */
class DeleteExperimentRequest extends Request
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

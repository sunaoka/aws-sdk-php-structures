<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListMLModelTrainingJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1024> $maxItems
 * @property string $neptuneIamRoleArn
 */
class ListMLModelTrainingJobsRequest extends Request
{
    /**
     * @param array{
     *     maxItems?: int<1, 1024>,
     *     neptuneIamRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

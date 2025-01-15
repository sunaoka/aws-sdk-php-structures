<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListMLModelTrainingJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1024>|null $maxItems
 * @property string|null $neptuneIamRoleArn
 */
class ListMLModelTrainingJobsRequest extends Request
{
    /**
     * @param array{
     *     maxItems?: int<1, 1024>|null,
     *     neptuneIamRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

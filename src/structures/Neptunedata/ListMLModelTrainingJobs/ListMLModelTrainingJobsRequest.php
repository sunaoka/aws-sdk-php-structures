<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListMLModelTrainingJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxItems
 * @property string $neptuneIamRoleArn
 */
class ListMLModelTrainingJobsRequest extends Request
{
    /**
     * @param array{
     *     maxItems?: int,
     *     neptuneIamRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListMLModelTransformJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxItems
 * @property string $neptuneIamRoleArn
 */
class ListMLModelTransformJobsRequest extends Request
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

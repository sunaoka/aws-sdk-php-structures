<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListMLModelTransformJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1024>|null $maxItems
 * @property string|null $neptuneIamRoleArn
 */
class ListMLModelTransformJobsRequest extends Request
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

<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetMLDataProcessingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $neptuneIamRoleArn
 */
class GetMLDataProcessingJobRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     neptuneIamRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

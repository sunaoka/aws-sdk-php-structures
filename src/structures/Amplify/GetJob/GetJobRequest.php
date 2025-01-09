<?php

namespace Sunaoka\Aws\Structures\Amplify\GetJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property string $jobId
 */
class GetJobRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     jobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

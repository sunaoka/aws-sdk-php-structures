<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $jobRunId
 * @property int $attempt
 */
class GetJobRunRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     jobRunId: string,
     *     attempt?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

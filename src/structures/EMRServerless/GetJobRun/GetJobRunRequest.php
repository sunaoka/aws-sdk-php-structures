<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $jobRunId
 * @property int<1, max>|null $attempt
 */
class GetJobRunRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     jobRunId: string,
     *     attempt?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

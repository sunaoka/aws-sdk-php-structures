<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CancelJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $jobRunId
 * @property int|null $shutdownGracePeriodInSeconds
 */
class CancelJobRunRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     jobRunId: string,
     *     shutdownGracePeriodInSeconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

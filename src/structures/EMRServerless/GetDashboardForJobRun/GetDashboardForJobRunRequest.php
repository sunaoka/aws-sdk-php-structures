<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetDashboardForJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $jobRunId
 * @property int<1, max>|null $attempt
 */
class GetDashboardForJobRunRequest extends Request
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

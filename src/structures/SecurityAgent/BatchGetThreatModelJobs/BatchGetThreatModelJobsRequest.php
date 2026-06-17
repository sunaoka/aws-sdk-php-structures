<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreatModelJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $threatModelJobIds
 * @property string $agentSpaceId
 */
class BatchGetThreatModelJobsRequest extends Request
{
    /**
     * @param array{
     *     threatModelJobIds: list<string>,
     *     agentSpaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

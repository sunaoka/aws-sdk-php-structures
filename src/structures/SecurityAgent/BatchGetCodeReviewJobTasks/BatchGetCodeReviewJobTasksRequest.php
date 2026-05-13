<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviewJobTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property list<string> $codeReviewJobTaskIds
 */
class BatchGetCodeReviewJobTasksRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     codeReviewJobTaskIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

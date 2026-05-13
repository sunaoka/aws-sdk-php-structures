<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListCodeReviewJobTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property int|null $maxResults
 * @property string|null $codeReviewJobId
 * @property 'PREFLIGHT'|'STATIC_ANALYSIS'|'PENTEST'|'FINALIZING'|null $stepName
 * @property string|null $categoryName
 * @property string|null $nextToken
 */
class ListCodeReviewJobTasksRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     maxResults?: int|null,
     *     codeReviewJobId?: string|null,
     *     stepName?: 'PREFLIGHT'|'STATIC_ANALYSIS'|'PENTEST'|'FINALIZING'|null,
     *     categoryName?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

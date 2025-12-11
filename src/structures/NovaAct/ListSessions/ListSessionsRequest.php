<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowDefinitionName
 * @property string $workflowRunId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'Ascending'|'Descending'|null $sortOrder
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     workflowDefinitionName: string,
     *     workflowRunId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     sortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

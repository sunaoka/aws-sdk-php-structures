<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotebookRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $owningProjectIdentifier
 * @property string|null $notebookIdentifier
 * @property 'QUEUED'|'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|null $status
 * @property string|null $scheduleIdentifier
 * @property int<1, 50>|null $maxResults
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 */
class ListNotebookRunsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     owningProjectIdentifier: string,
     *     notebookIdentifier?: string|null,
     *     status?: 'QUEUED'|'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|null,
     *     scheduleIdentifier?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

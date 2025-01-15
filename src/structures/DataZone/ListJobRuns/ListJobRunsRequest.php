<?php

namespace Sunaoka\Aws\Structures\DataZone\ListJobRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $jobIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED'|null $status
 */
class ListJobRunsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     jobIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     status?: 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DataZone\ListJobRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $jobIdentifier
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED' $status
 */
class ListJobRunsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     jobIdentifier: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string,
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     status?: 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

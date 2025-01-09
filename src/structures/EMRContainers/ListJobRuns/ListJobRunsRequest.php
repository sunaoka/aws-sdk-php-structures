<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualClusterId
 * @property \Aws\Api\DateTimeResult $createdBefore
 * @property \Aws\Api\DateTimeResult $createdAfter
 * @property string $name
 * @property list<'PENDING'|'SUBMITTED'|'RUNNING'|'FAILED'|'CANCELLED'|'CANCEL_PENDING'|'COMPLETED'> $states
 * @property int $maxResults
 * @property string $nextToken
 */
class ListJobRunsRequest extends Request
{
    /**
     * @param array{
     *     virtualClusterId: string,
     *     createdBefore?: \Aws\Api\DateTimeResult,
     *     createdAfter?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     states?: list<'PENDING'|'SUBMITTED'|'RUNNING'|'FAILED'|'CANCELLED'|'CANCEL_PENDING'|'COMPLETED'>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

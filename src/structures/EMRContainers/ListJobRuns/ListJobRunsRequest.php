<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualClusterId
 * @property \Aws\Api\DateTimeResult|null $createdBefore
 * @property \Aws\Api\DateTimeResult|null $createdAfter
 * @property string|null $name
 * @property list<'PENDING'|'SUBMITTED'|'RUNNING'|'FAILED'|'CANCELLED'|'CANCEL_PENDING'|'COMPLETED'>|null $states
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListJobRunsRequest extends Request
{
    /**
     * @param array{
     *     virtualClusterId: string,
     *     createdBefore?: \Aws\Api\DateTimeResult|null,
     *     createdAfter?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     states?: list<'PENDING'|'SUBMITTED'|'RUNNING'|'FAILED'|'CANCELLED'|'CANCEL_PENDING'|'COMPLETED'>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

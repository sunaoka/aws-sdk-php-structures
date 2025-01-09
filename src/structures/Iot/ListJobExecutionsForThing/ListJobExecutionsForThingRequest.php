<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobExecutionsForThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED' $status
 * @property string $namespaceId
 * @property int<1, 250> $maxResults
 * @property string $nextToken
 * @property string $jobId
 */
class ListJobExecutionsForThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED',
     *     namespaceId?: string,
     *     maxResults?: int<1, 250>,
     *     nextToken?: string,
     *     jobId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

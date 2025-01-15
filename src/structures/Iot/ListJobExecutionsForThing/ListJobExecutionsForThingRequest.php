<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobExecutionsForThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null $status
 * @property string|null $namespaceId
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $jobId
 */
class ListJobExecutionsForThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null,
     *     namespaceId?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null,
     *     jobId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

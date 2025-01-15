<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED'|null $status
 * @property 'CONTINUOUS'|'SNAPSHOT'|null $targetSelection
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $thingGroupName
 * @property string|null $thingGroupId
 * @property string|null $namespaceId
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     status?: 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED'|null,
     *     targetSelection?: 'CONTINUOUS'|'SNAPSHOT'|null,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null,
     *     thingGroupName?: string|null,
     *     thingGroupId?: string|null,
     *     namespaceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

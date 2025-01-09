<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED' $status
 * @property 'CONTINUOUS'|'SNAPSHOT' $targetSelection
 * @property int $maxResults
 * @property string $nextToken
 * @property string $thingGroupName
 * @property string $thingGroupId
 * @property string $namespaceId
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     status?: 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED',
     *     targetSelection?: 'CONTINUOUS'|'SNAPSHOT',
     *     maxResults?: int,
     *     nextToken?: string,
     *     thingGroupName?: string,
     *     thingGroupId?: string,
     *     namespaceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

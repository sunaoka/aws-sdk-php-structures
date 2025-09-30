<?php

namespace Sunaoka\Aws\Structures\Ecs\ListTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string|null $containerInstance
 * @property string|null $family
 * @property string|null $nextToken
 * @property int|null $maxResults
 * @property string|null $startedBy
 * @property string|null $serviceName
 * @property 'RUNNING'|'PENDING'|'STOPPED'|null $desiredStatus
 * @property 'EC2'|'FARGATE'|'EXTERNAL'|'MANAGED_INSTANCES'|null $launchType
 */
class ListTasksRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     containerInstance?: string|null,
     *     family?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null,
     *     startedBy?: string|null,
     *     serviceName?: string|null,
     *     desiredStatus?: 'RUNNING'|'PENDING'|'STOPPED'|null,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL'|'MANAGED_INSTANCES'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

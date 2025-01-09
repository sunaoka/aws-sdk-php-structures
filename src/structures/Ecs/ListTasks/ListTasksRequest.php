<?php

namespace Sunaoka\Aws\Structures\Ecs\ListTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $containerInstance
 * @property string $family
 * @property string $nextToken
 * @property int $maxResults
 * @property string $startedBy
 * @property string $serviceName
 * @property 'RUNNING'|'PENDING'|'STOPPED' $desiredStatus
 * @property 'EC2'|'FARGATE'|'EXTERNAL' $launchType
 */
class ListTasksRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     containerInstance?: string,
     *     family?: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     startedBy?: string,
     *     serviceName?: string,
     *     desiredStatus?: 'RUNNING'|'PENDING'|'STOPPED',
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

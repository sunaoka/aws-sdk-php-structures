<?php

namespace Sunaoka\Aws\Structures\Ecs\ListServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $nextToken
 * @property int $maxResults
 * @property 'EC2'|'FARGATE'|'EXTERNAL' $launchType
 * @property 'REPLICA'|'DAEMON' $schedulingStrategy
 */
class ListServicesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL',
     *     schedulingStrategy?: 'REPLICA'|'DAEMON'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

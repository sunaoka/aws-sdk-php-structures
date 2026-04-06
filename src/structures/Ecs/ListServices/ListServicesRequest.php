<?php

namespace Sunaoka\Aws\Structures\Ecs\ListServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string|null $nextToken
 * @property int|null $maxResults
 * @property 'EC2'|'FARGATE'|'EXTERNAL'|'MANAGED_INSTANCES'|null $launchType
 * @property 'REPLICA'|'DAEMON'|null $schedulingStrategy
 * @property 'CUSTOMER'|'ECS'|null $resourceManagementType
 */
class ListServicesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL'|'MANAGED_INSTANCES'|null,
     *     schedulingStrategy?: 'REPLICA'|'DAEMON'|null,
     *     resourceManagementType?: 'CUSTOMER'|'ECS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

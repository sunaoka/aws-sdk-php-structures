<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListServiceInstancesFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 * @property string $serviceName
 * @property 'name'|'deploymentStatus'|'templateName'|'serviceName'|'environmentName'|'lastDeploymentAttemptedAt'|'createdAt' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 */
class ListServiceInstancesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\ListServiceInstancesFilter>,
     *     maxResults?: int,
     *     nextToken?: string,
     *     serviceName?: string,
     *     sortBy?: 'name'|'deploymentStatus'|'templateName'|'serviceName'|'environmentName'|'lastDeploymentAttemptedAt'|'createdAt',
     *     sortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

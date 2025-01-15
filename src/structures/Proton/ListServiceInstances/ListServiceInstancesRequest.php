<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListServiceInstancesFilter>|null $filters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $serviceName
 * @property 'name'|'deploymentStatus'|'templateName'|'serviceName'|'environmentName'|'lastDeploymentAttemptedAt'|'createdAt'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 */
class ListServiceInstancesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\ListServiceInstancesFilter>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     serviceName?: string|null,
     *     sortBy?: 'name'|'deploymentStatus'|'templateName'|'serviceName'|'environmentName'|'lastDeploymentAttemptedAt'|'createdAt'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

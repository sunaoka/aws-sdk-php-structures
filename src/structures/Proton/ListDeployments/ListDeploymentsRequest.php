<?php

namespace Sunaoka\Aws\Structures\Proton\ListDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $componentName
 * @property string|null $environmentName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $serviceInstanceName
 * @property string|null $serviceName
 */
class ListDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     componentName?: string|null,
     *     environmentName?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     serviceInstanceName?: string|null,
     *     serviceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

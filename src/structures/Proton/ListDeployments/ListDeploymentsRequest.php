<?php

namespace Sunaoka\Aws\Structures\Proton\ListDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentName
 * @property string $environmentName
 * @property int $maxResults
 * @property string $nextToken
 * @property string $serviceInstanceName
 * @property string $serviceName
 */
class ListDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     componentName?: string,
     *     environmentName?: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     serviceInstanceName?: string,
     *     serviceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

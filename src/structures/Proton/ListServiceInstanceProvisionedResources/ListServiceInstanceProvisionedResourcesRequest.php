<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceInstanceProvisionedResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property string $serviceInstanceName
 * @property string $serviceName
 */
class ListServiceInstanceProvisionedResourcesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     serviceInstanceName: string,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

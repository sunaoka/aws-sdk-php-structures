<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceInstanceProvisionedResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property string $serviceInstanceName
 * @property string $serviceName
 */
class ListServiceInstanceProvisionedResourcesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     serviceInstanceName: string,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

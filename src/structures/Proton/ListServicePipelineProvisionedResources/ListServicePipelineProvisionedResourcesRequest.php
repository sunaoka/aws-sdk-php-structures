<?php

namespace Sunaoka\Aws\Structures\Proton\ListServicePipelineProvisionedResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property string $serviceName
 */
class ListServicePipelineProvisionedResourcesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

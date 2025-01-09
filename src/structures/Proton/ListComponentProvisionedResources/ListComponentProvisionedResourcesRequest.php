<?php

namespace Sunaoka\Aws\Structures\Proton\ListComponentProvisionedResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentName
 * @property string $nextToken
 */
class ListComponentProvisionedResourcesRequest extends Request
{
    /**
     * @param array{
     *     componentName: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

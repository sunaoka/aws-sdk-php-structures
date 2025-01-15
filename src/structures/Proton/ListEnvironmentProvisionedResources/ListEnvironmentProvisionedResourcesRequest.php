<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironmentProvisionedResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentName
 * @property string|null $nextToken
 */
class ListEnvironmentProvisionedResourcesRequest extends Request
{
    /**
     * @param array{
     *     environmentName: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

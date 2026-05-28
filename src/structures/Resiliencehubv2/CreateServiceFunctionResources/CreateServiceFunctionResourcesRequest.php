<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateServiceFunctionResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string $serviceFunctionId
 * @property list<string> $resources
 */
class CreateServiceFunctionResourcesRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     serviceFunctionId: string,
     *     resources: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceInstanceOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $deploymentId
 * @property string|null $nextToken
 * @property string $serviceInstanceName
 * @property string $serviceName
 */
class ListServiceInstanceOutputsRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string|null,
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

<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceInstanceOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property string $nextToken
 * @property string $serviceInstanceName
 * @property string $serviceName
 */
class ListServiceInstanceOutputsRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string,
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

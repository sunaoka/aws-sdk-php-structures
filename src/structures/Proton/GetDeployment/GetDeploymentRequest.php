<?php

namespace Sunaoka\Aws\Structures\Proton\GetDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentName
 * @property string $environmentName
 * @property string $id
 * @property string $serviceInstanceName
 * @property string $serviceName
 */
class GetDeploymentRequest extends Request
{
    /**
     * @param array{
     *     componentName?: string,
     *     environmentName?: string,
     *     id: string,
     *     serviceInstanceName?: string,
     *     serviceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Proton\GetDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $componentName
 * @property string|null $environmentName
 * @property string $id
 * @property string|null $serviceInstanceName
 * @property string|null $serviceName
 */
class GetDeploymentRequest extends Request
{
    /**
     * @param array{
     *     componentName?: string|null,
     *     environmentName?: string|null,
     *     id: string,
     *     serviceInstanceName?: string|null,
     *     serviceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

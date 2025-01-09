<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerServiceDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 * @property array<string, Shapes\Container> $containers
 * @property Shapes\EndpointRequest $publicEndpoint
 */
class CreateContainerServiceDeploymentRequest extends Request
{
    /**
     * @param array{
     *     serviceName: string,
     *     containers?: array<string, Shapes\Container>,
     *     publicEndpoint?: Shapes\EndpointRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
